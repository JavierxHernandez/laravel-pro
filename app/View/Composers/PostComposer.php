<?php

namespace App\View\Composers;

use Illuminate\View\View;

class PostComposer
{
    public function compose(View $view){
        $view->with('pruebaComposer', 'Este es un mensaje de prueba en Composer');
    }
}
