<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\Field;

class ImageInput extends Field
{
    protected string $view = 'filament.forms.components.image-input';

    public string $size = '40px';

    public string $imgPath = '';

    public function size(?string $size): static
    {
        $this->size = $size;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function imgPath(?string $path): static
    {
        $this->imgPath = $path;
        return $this;
    }

    public function getImgPath(): ?string
    {
        return $this->imgPath;
    }
}
