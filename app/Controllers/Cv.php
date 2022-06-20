<?php

namespace App\Controllers;

use App\Models\DataDiri;

class Cv extends BaseController
{
    public function __construct()
    {
        $this->data = new DataDiri();
    }
    public function index()
    {
        echo view('aboute/cv', [
            'data' => $this->data->first()
        ]);
    }

    public function add()
    {
        echo view('aboute/add');
    }
    function simpan()
    {
        $this->data->save([
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'kontak' => $this->request->getVar('kontak'),
            'email' => $this->request->getVar('email'),
            'pergruan_tinggi' => $this->request->getPost('pergruan_tinggi'),
            'sma' => $this->request->getVar('sma'),
            'smp' => $this->request->getVar('smp'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
        ]);
        return redirect()->to('cv');
    }

    public function get_edit($id)
    {
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'id' => $i['id'],
                'nama' => $i['nama'],
                'alamat' => $i['alamat'],
                'kontak' => $i['kontak'],
                'email' => $i['email'],
                'pergruan_tinggi' => $i['pergruan_tinggi'],
                'sma' => $i['sma'],
                'smp' => $i['smp'],
                'tanggal_lahir' => $i['tanggal_lahir'],
                'tempat_lahir' => $i['tempat_lahir'],
            ];
            return view('aboute/edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }


    function update()
    {
        $this->data->save([
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'kontak' => $this->request->getVar('kontak'),
            'email' => $this->request->getVar('email'),
            'pergruan_tinggi' => $this->request->getPost('pergruan_tinggi'),
            'sma' => $this->request->getVar('sma'),
            'smp' => $this->request->getVar('smp'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
        ]);
        return redirect()->to('cv');
    }

    function delete($id)
    {
        $this->data->delete($id);
        return redirect()->to('cv');
    }

    public function logout()
    {
        echo view('login/index');
    }
}
