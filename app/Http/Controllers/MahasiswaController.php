<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama'   => 'Wahyudin',
            'nim'    => '251011701160',
            'prodi'  => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email'  => 'ctripandicell@gamail.com',
            'status' => 'Aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}