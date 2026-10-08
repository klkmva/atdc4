<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Image;

function saveImage(Model &$model) {
    $reflection = new ReflectionClass($model);
    $folder = strtolower($reflection->getShortName());
    $fimage = $model->image;
    if ($fimage && preg_match('/^data:.*/', $fimage)) {
        try {
            $a = explode(',', $fimage);
            $encoded = end($a);
            $name = uniqid() . '.webp';
            $image = Image::fromBase64($encoded);
            $ratio = $image->width() / $image->height();
            $dim = env('IMG_SIZE', 200);
            $image->resize(width: $dim, height: $dim / $ratio)
                ->toWebp()
                ->storePubliclyAs($folder, $name, 'images');
            $model->image = "/images/{$folder}/{$name}";

            Notification::make()
            ->title('[' . $name . '] Image sauvegardée avec succès.')
            ->success()
            ->send();
            return true;
        } catch (\Exception $e) {
            $model->image = null;
            Notification::make()
            ->title($e->getMessage())
            ->danger()
            ->send();
            return false;
        }
    }
    elseif (preg_match('/.*?openapi\.bnf\.fr\/couverture.*/', $fimage)) {
        try {
            $name = uniqid() . '.webp';
            $image = Image::fromUrl($fimage);
            $ratio = $image->width() / $image->height();
            $dim = env('IMG_SIZE', 200);
            $image->resize(width: $dim, height: $dim / $ratio)
                ->toWebp()
                ->storePubliclyAs($folder, $name, 'images');
            $model->image = "/images/{$folder}/{$name}";

            Notification::make()
                ->title('[' . $name . '] Image sauvegardée avec succès.')
                ->success()
                ->send();
            return true;
        }
        catch (\Exception $e) {
            $model->image = null;
            Notification::make()
                ->title($e->getMessage())
                ->danger()
                ->send();
            return false;
        }
    }
    else
        return true;
}

function deleteImage(Model $model) {
    $reflection = new ReflectionClass($model);
    $folder = strtolower($reflection->getShortName());
    $image = $model->image;
    if ($image && preg_match('/^\/images\/' . $folder . '\/.*/', $image)) {
        Storage::disk('images')->delete(\str_replace('/images/', '', $image));
    }
    return true;
}


function convert2webp(Model $model) {
    try {
        $imgname = $model->image;
        $id = $model->id;
        $parts = explode('/', $imgname);
        $image = Image::fromStorage($parts[2].'/'.$parts[3], disk: 'images');
        $width = $image->width();
        if ($width != 200 && $image->extension() != 'webp') {
            $height = $image->height();
            $ratio = $width / $height;
            $fname = explode('.', $parts[3])[0];
            $image->resize(width: 200, height: 200 / $ratio)
                ->toWebp()
                ->storePubliclyAs(path: $parts[2], name: $fname . '.webp', disk: 'images');
            $model->update(['image' => "/images/{$parts[2]}/{$fname}.webp"]);
            return "$id - [{$imgname}] converti";
        } else {
            return "$id - [$imgname] pas de conversion";
        }
    } catch (\Exception $e) {
        return "$id - [{$imgname}] échec";
    }
}
