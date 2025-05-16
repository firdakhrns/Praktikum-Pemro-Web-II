<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Profil extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['profil'] = $model->getMahasiswa();
        return view('profil/index', $data);
    }
}