<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        echo 'ini adalah halaman aboute methode index';
    }

    public function blog($content = '', $title = '', $Kelas = '')
    {
        $data['content'] = "This Is The Contents";;
        $data['title'] = "This Is The Contents";
        $data['kelas'] = $Kelas;

        echo view('vw_blog', $data);
    }
}
