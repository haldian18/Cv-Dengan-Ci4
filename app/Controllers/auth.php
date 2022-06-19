<?php

namespace App\Controllers;

class auth extends BaseController
{

    public function index()
    {
        $LoginModel = new \App\Models\LoginModel();
        $auth = $this->request->getPOst('auth');
        if ($auth) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = "Silahkan Masukkan Username dan Password";
            }
            if (empty($err)) {
                $datauser = $LoginModel->where("username", $username)->first();
                if ($datauser['password'] != md5($password)) {
                    $err = "Password Tidak Sesuai";
                }
            }
            if (empty($err)) {
                $usersesi = [
                    'username' => $datauser['username'],
                    'password' => $datauser['password']
                ];
                session()->set($usersesi);
                return redirect()->to('cv');
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to("auth");
            }
        }
        echo view('login/index');
    }
}
