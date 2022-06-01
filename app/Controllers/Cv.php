<?php

namespace App\Controllers;

class CV extends BaseController
{
    public function index()
    {
        echo 'ini adalah halaman cv methode index';
    }

    public function haldian()
    {

        echo view('aboute/cv');
    }
}
