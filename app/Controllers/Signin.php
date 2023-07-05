<?php

namespace App\Controllers;
use App\Models\User;

class Signin extends BaseController
{
    protected $session;
    public function index()
    {
        $session = session();
        if (!$session->has('id')) {

            $data = [
                'title' => 'Log In'
            ];
            echo view("index", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'email' => $user['email'],
                'id' => $namaPengguna,
                'title' => 'Log In'
            ];
            echo view("container", $data);
        }
    }

    public function login_auth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new User();
        $user = $userModel->getUserByEmail($email);
        if ($user['email'] == $email && $user['password'] == $password) {
            // Login berhasil, simpan informasi pengguna ke dalam session
            $session = session();
            $session->set('id', $user['id']);
            return redirect()->to(base_url('/container'));
        } else {
            $url = base_url('/form_login') . '?show_register=true';
            echo '<script>
                alert("Password Tidak Sama");
                window.location.href = "' . $url . '";
            </script>';
        }
    }

    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }
}