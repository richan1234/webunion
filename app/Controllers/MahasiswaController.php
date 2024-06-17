<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdiModel;

class MahasiswaController extends BaseController
{
    protected $prodi;
    public function __construct()
    {
        $this->prodi = new ProdiModel();
    }

    public function profile()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url(''));
        }

        // Retrieve user data from session
        $dataMahasiswa = [
            'user_id' => session()->get('user_id'),
            'user_type' => session()->get('user_type'),
            'mahasiswa' => session()->get('mahasiswa'),
        ];

        $prodi = $this->prodi->find($dataMahasiswa['mahasiswa']['prodi_id']);

        $data = [
            'mahasiswa' => $dataMahasiswa,
            'prodi' => $prodi,
        ];

        return view('mahasiswa/profile', $data);
    }

    public function editProfile()
    {
        // Check if user is logged in
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url(''));
        }

        // Retrieve user data from session
        $dataMahasiswa = [
            'user_id' => session()->get('user_id'),
            'user_type' => session()->get('user_type'),
            'mahasiswa' => session()->get('mahasiswa'),
        ];

        $prodi = $this->prodi->find($dataMahasiswa['mahasiswa']['prodi_id']);

        $data = [
            'mahasiswa' => $dataMahasiswa,
            'prodi' => $prodi,
        ];
        return view('mahasiswa/edit_profile_mahasiswa', $data);
    }

    public function profileInfoLomba()
    {
        return view('mahasiswa/profile_info_lomba');
    }

    public function profileTimLomba()
    {
        return view('mahasiswa/profile_tim_lomba');
    }
}
