<?php

namespace App;

trait RedirectIndex
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
