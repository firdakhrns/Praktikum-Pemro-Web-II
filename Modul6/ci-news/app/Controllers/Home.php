<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->getMahasiswa();
        return view('home/index', $data);
    }
}