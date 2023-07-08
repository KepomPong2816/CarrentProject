<?php

namespace App\Controllers;
use App\Models\User;

class Home extends BaseController
{
    protected $session;
    public function home()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'email' => $user['email'],
                'id' => $namaPengguna,
                'title' => 'Home'
            ];
            echo view("container", $data);
        }
    }

    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('form_login');
    }

    public function about()
    {
        return view('about');
    }

    public function landing_page()
    {
        return view('container');
    }
        public function sewa()
    {
        return view('sewa_mobil');
    }
    public function pesan()
    {
        return view('pesan_mobil');
    }
    public function bayar()
    {
        return view('bayar_pesanan');
    }
}
