<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Bo;

class SideHeaderComposer
{
    public function compose(View $view){

        $view->with('bos',Bo::all());

    }
}