<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

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

public function store()
{
    if (!$this->validate([
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} isi terlebih dahulu.'
            ]
        ],
        'npm' => [
            'rules' => 'required|is_unique[user.npm]',
            'errors' => [
                'required' => '{field} wajib di isi.',
                'is_unique' => '{field} sudah terdaftar.'
            ]
        ]
    ])) {
        $validation = \Config\Services::validation();
        return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
    }
    $userModel = new UserModel();

    $userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'npm' => $this->request->getVar('npm'),
        'id_kelas' => $this->request->getVar('kelas'),
    ]);
    $data = [
        'nama' =>  $this->request->getVar('nama'),
        'npm' => $this->request->getVar('npm'),
        'kelas' => $this->request->getVar('kelas'),
    ];
    return view('profile', $data);
}

public function create(){
    $kelas = [
        [
            'id' => 1,
            'nama_kelas' => 'A'
        ],
        [
            'id' => 2,
            'nama_kelas' => 'B'
        ],
        [
            'id' => 3,
            'nama_kelas' => 'C'
        ],
        [
            'id' => 4,
            'nama_kelas' => 'D'
        ],
    ];

    $data = [
        'kelas' => $kelas,
    ];

    return view('create_user', $data);
}

}