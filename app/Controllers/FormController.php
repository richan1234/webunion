<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdiModel;

class FormController extends BaseController
{
    protected $prodi;
    public function __construct()
    {
        $this->prodi = new ProdiModel();
    }

    public function form_lomba()
    {
        return view('form/form_lomba');
    }

    public function form_tim()
    {
        $result = $this->prodi->findAll();
        return view('form/form_tim', ['result' => $result]);
    }
}
