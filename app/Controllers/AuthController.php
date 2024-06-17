<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MahasiswaModel;
use App\Models\AdminModel;

class AuthController extends BaseController
{
    protected $db; // Declare a protected property to hold the db instance
    protected $session;
    public function __construct()
    {
        // Load the database service via the CodeIgniter controller constructor
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }
    public function mahasiswaLogin()
    {
        $model = new MahasiswaModel();
        $nim = $this->request->getPost('NIM');
        $password = $this->request->getPost('password');

        $mahasiswa = $model->where('nim', $nim)->first();
        $lastQuery = $this->db->getLastQuery();
        if ($mahasiswa && password_verify($password, $mahasiswa['password'])) {
            session()->set([
                'user_id' => $mahasiswa['NIM'], // Assuming 'NIM' is your primary key
                'mahasiswa' => $mahasiswa,
                'user_type' => 'mahasiswa',
                'isLoggedIn' => true,
            ]);

            return $this->response->setJSON([
                'status' => 'success',
                'redirect_url' => '/home', // Redirect URL on successful login
            ])->setStatusCode(ResponseInterface::HTTP_OK);
        } else {
            $this->session->setFlashData('error', 'Invalid login credentials');
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid login credentials',
            ])->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }
    }


    public function adminLogin()
    {
        $model = new AdminModel();
        $admin_id = $this->request->getPost('admin_id');
        $password = $this->request->getPost('password');

        $admin = $model->where('admin_id', $admin_id)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'user_id' => $admin['admin_id'],
                'username' => $admin['nama_lengkap'],
                'user_type' => 'admin',
                'isLoggedIn' => true,
            ]);
            return $this->response->setJSON([
                'status' => 'success',
                'redirect_url' => '/admin/dashboard', // Redirect URL on successful login
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid login credentials',
            ]);
        }
    }

    public function mahasiswaLogout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
