<?php

namespace App\Controllers;

class Home extends BaseController{
    public function profile($nama = "", $kelas = "", $npm = ""){
        $data=[
            'nama' => 'Yuna Meisa Putri',
            'kelas' => 'C',
            'npm' => '2117051041'
        ];
        
        return view('profile', $data);
    }
}
