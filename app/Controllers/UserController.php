<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
       $data =[
        'title' => 'List User',
        'users' => $this->userModel->getUser(),
       ];
        return view('list_user', $data);
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
    // if (!$this->validate([
    //     'nama' => [
    //         'rules' => 'required',
    //         'errors' => [
    //             'required' => '{field} isi terlebih dahulu.'
    //         ]
    //     ],
    //     'npm' => [
    //         'rules' => 'required|is_unique[user.npm]',
    //         'errors' => [
    //             'required' => '{field} wajib di isi.',
    //             'is_unique' => '{field} sudah terdaftar.'
    //         ]
    //     ]
    // ])) {
    //     $validation = \Config\Services::validation();
    //     return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
    // }

    // $userModel = new UserModel();

    $this->userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'npm' => $this->request->getVar('npm'),
        'id_kelas' => $this->request->getVar('kelas'),
    ]);
    // $data = [
    //     'nama' =>  $this->request->getVar('nama'),
    //     'npm' => $this->request->getVar('npm'),
    //     'kelas' => $this->request->getVar('kelas'),
    // ];
    return redirect()->to('/user');
}

public function create(){
    $kelasModel = new KelasModel();
    $kelas = $this->kelasModel->getKelas();
    
    $data = [
        'title' => 'Create User',
        // 'npm' => $npm,
        'kelas' => $kelas,
    ];

    return view('create_user', $data);
}

public function getUser(){
    return $this->join('kelas', 'kelas.id=user.id_kelas')->findAll();
}

}