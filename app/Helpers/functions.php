<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

function saveImage(Model &$model) {
    $reflection = new ReflectionClass($model);
    $folder = '/' . strtolower($reflection->getShortName()) .'/';
    $image = $model->image;
    if ($image && preg_match('/^data:.*/', $image)) {
        try {
            $a = explode(',', $image);
            $b = explode(";", $a[0]);
            $c = explode(":", $b[0]);
            $d = explode("/", $c[1]);
            $ext = $d[1];
            $name = uniqid() . '.' . $ext;
            $fname = $folder . $name;
            $encoded = $a[count($a) - 1];
            $decoded = base64_decode($encoded);
            if (Storage::disk('images')->put($fname, $decoded) === false) {
                throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
            };
            $model->image = $fname;

            Notification::make()
            ->title('[' . $name . '] Image sauvegardée avec succès.')
            ->success()
            ->send();
        } catch (\Exception $e) {
            $model->image = null;
            Notification::make()
            ->title($e->getMessage())
            ->danger()
            ->send();
        }
    }
    return true;
}

function deleteImage(Model $model) {
    $reflection = new ReflectionClass($model);
    $folder = strtolower($reflection->getShortName());
    $image = $model->image;
    if ($image && preg_match('/^\/' . $folder . '\/.*/', $image)) {
        Storage::disk('images')->delete($image);
    }
    return true;
}