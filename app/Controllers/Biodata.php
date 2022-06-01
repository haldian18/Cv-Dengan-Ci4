<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        return view('Biodata/vw_form');
    }

    public function save()
    {
        return view('Biodata/vw_biodata');
    }
}
