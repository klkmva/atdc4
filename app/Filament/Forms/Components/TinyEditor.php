<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\Field;
use Illuminate\Support\Arr;

class TinyEditor extends Field
{
    protected string $view = 'filament.forms.components.tiny-editor';

    public string | int | null $height = null;

    public string | int | null $max_height = null;

    public string | int | null $min_height = null;

    public string | int | null $width = null;

    public string | int | null $max_width = null;

    public string | int | null $min_width = null;

    public bool | string $resize = 'true';

    public string $placeholder = '';

    public string $toolbar = 'undo redo removeformat | styles | bold italic underline | alignjustify alignleft aligncenter alignright | numlist bullist outdent indent | forecolor backcolor | table hr | image link insertItem';

    public string $plugins = 'accordion autoresize advlist link image lists preview pagebreak searchreplace table';

    public array $templates = [
        'section' => '<section><h1>titre</h1><p>texte</p></section>',
        'frame' => '<div class="frame"><p>texte</p></div>',
    ];

    public function height(string | int | null $h): static
    {
        $this->height = $h;
        return $this;
    }

    public function max_height(string | int | null $h): static
    {
        $this->max_height = $h;
        return $this;
    }

    public function min_height(string | int | null $h): static
    {
        $this->min_height = $h;
        return $this;
    }

    public function width(string | int | null $h): static
    {
        $this->height = $h;
        return $this;
    }

    public function max_width(string | int | null $h): static
    {
        $this->max_width = $h;
        return $this;
    }

    public function min_width(string | int | null $h): static
    {
        $this->min_width = $h;
        return $this;
    }

    public function resize(bool | string $r): static
    {
        $this->resize = gettype($r) == 'string' ? $r : ($r ? 'true' : 'false');
        return $this;
    }

    public function placeholder(string $s): static
    {
        $this->placeholder = $s;
        return $this;
    }

    public function toolbar( string $t): static
    {
        $this->toolbar = $t;
        return $this;
    }

    public function plugins(string $p): static
    {
        $this->plugins = $p;
        return $this;
    }

    public function templates(array $tpl): static
    {
        $this->templates = $tpl;
        return $this;
    }

    public function defaultTemplate(): string
    {
        return $this->templates['section'] ?? '<section><h1>Titre</h1><div><p>Texte</p></div></section>';
    }


    public function initialTemplate(): string
    {
        return '<h1>Titre page</h1>' . $this->defaultTemplate();
    }

    public function template(string $id): string | null
    {
        return $this->templates[$id] ?? null;
    }
}
