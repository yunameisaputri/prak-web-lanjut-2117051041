<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

public function profile($nama = "", $npm = "", $kelas = "")
{
    $data = [
        'nama' => 'Yuna Meisa Putri',
        'npm' => '2117051041',
        'kelas' => 'C'
    ];
    return view('profile', $data);
}
public function create()
{
    return view('create_user');
}
public function store()
{
    $data = [
        'nama' =>  $this->request->getVar('nama'),
        'npm' => $this->request->getVar('npm'),
        'kelas' => $this->request->getVar('kelas'),
    ];
    return view('profile', $data);
}


}