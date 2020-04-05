<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;

class CategoryListComposer
{
    public function compose (View $view)
    {
        $categories = [
            ['id' => 1, 'name' => 'Laravel'],
            ['id' => 2, 'name' => 'PHP'],
            ['id' => 3, 'name' => 'Python'],
            ['id' => 4, 'name' => 'Java'],
        ];

        $view->with (['categories' => $categories]);
    }
}