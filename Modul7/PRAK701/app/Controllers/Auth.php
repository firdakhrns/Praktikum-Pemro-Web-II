<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController {
    public function login() {
        return view('auth/login');
    }

    public function loginProses() {
        $userModel = new UserModel();
        $user = $userModel->where('username', $this->request->getPost('username'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set(['username' => $user['username'], 'isLoggedIn' => true]);
            return redirect()->to('/buku');
        }
        return redirect()->back()->with('error', 'Username atau password salah!');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}
?>