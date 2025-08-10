<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function home()
    {
        return view('welcome', [
            'listeformations' => [],
        ]);
    }

    public function registerMoyo()
    {
        return view('home.registermoyo');
    }

    public function registerParentLocal()
    {
        return view('home.pages.registerparentlocal');
    }
    public function contact()
    {
        return view('pages.contact');
    }


}
