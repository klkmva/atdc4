<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageTemplates extends Controller
{
    public function templates()
    {
        return json_encode([
            [
                'title' => 'Template1',
                'description' => 'Un template test',
                'content' => '<div style="font-size: 24pt; color: red">Hello world</div>'
            ],
            [
                'title' => 'Template2',
                'description' => 'Un deuxième template',
                'content' => '<div style="font-size: 6pt; color: green">Hello world</div>'
            ],
        ]);
    }
}
