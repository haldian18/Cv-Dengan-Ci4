<?php

namespace App\Controllers;

class Aboute extends BaseController
{
    public function index()
    {
        echo view('aboute/cv');
    }

    public function uri($nama = '', $npm = '', $Kelas = '')
    {
        $data['nama'] = $nama;
        $data['npm'] = $npm;
        $data['kelas'] = $Kelas;

        echo view('aboute/uri', $data);
    }
}
