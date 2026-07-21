<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageTemplates extends Controller
{
    public function templates()
    {
        return json_encode([
            [
                'title' => 'Section',
                'description' => 'Insérer une section',
                'content' => '<section><h1>titre</h1><p>texte</p></section>'
            ],
            [
                'title' => 'Cadre',
                'description' => 'Insérer un cadre',
                'content' => '<div class="frame">texte</div>'
            ],
        ]);
    }
}
