<?php
namespace App\Controllers;
use App\Models\BukuModel;

class Buku extends BaseController {
    protected $bukuModel;

    public function __construct() {
        if (!session()->get('isLoggedIn')) {
            session()->setFlashdata('error', 'Login terlebih dahulu!');
            header('Location: ' . base_url('login'));
            exit;
        }
        $this->bukuModel = new BukuModel();
    }

    public function index() {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function create() {
        return view('buku/create');
    }

    public function store()
{
    $validation = \Config\Services::validation();

    $rules = [
        'judul' => 'required|string',
        'penulis' => 'required|string',
        'penerbit' => 'required|string',
        'tahun_terbit' => 'required|numeric|greater_than[1900]|less_than[2024]',
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()
                         ->withInput()
                         ->with('errors', $validation->getErrors());
    }

    $bukuModel = new BukuModel();
    $bukuModel->insert([
        'judul' => $this->request->getPost('judul'),
        'penulis' => $this->request->getPost('penulis'),
        'penerbit' => $this->request->getPost('penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
    ]);

    return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan.');
}

    public function edit($id) {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/edit', $data);
    }

    public function update($id) {
        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1900]|less_than[2024]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $this->bukuModel->update($id, $this->request->getPost());
        return redirect()->to('/buku');
    }

    public function delete($id) {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku');
    }
}
?>