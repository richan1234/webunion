<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('home/home');
    }

    public function berita(): string
    {
        return view('home/berita');
    }

    public function detail_berita(): string
    {
        return view('home/detail_berita');
    }

    public function detail_lomba(): string
    {
        return view('home/detail_lomba');
    }
}
