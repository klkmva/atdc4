<?php

namespace App\Filament\Tables\Columns;

use Filament\Support\Components\Contracts\HasEmbeddedView;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Closure;

class HtmlColumn extends Column implements HasEmbeddedView
{
    protected $margin = '10px';

    public function toEmbeddedHtml(): string
    {
        ob_start(); ?>

        <div style="margin-top: <?= $this->margin ?>; margin-bottom: <?= $this->margin ?>;">
            <?= $this->getState() ?>
        </div>

        <?php return ob_get_clean();
    }

    public function setMargin(string $pixels): static
    {
        $this->margin = $pixels;

        return $this;
    }
}
