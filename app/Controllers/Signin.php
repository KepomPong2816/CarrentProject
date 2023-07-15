<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\UserModel;

class Signin extends BaseController
{
    protected $session;
    protected $db;

    public function __construct()
    {
        $this->session = session();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }


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
        $users = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                if ($dataUser->level == '1') {
                    session()->set([
                        'email' => $dataUser->email,
                        'level' => $dataUser->level,
                        'id' => $dataUser->id,
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to(base_url('admin/index'));
                } elseif ($dataUser->level == '0') {
                    session()->set([
                        'email' => $dataUser->email,
                        'level' => $dataUser->level,
                        'id' => $dataUser->id,
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to(base_url('/container'));
                } else {
                    $session = session();
                    // Invalid user level
                    session()->setFlashdata('error', 'Invalid user level');
                    return redirect()->to(base_url('home/index'));
                }
            } else {
                $session = session();
                $session->setFlashdata('salahpw', '<div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-line-lock"></i>Maaf, Password Anda Salah<br>Silahkan coba kembali.</a>
                            </div>');
                return redirect()->to(base_url('home/salahpw'));
            }
        } else {
            $session = session();
            $session->setFlashdata('salah', '<div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-line-lock"></i>Maaf, Username & Password Anda Salah<br>Silahkan coba kembali.</a>
                            </div>');
            return redirect()->to(base_url('home/salah'));
        }        
    }

    // public function login_auth()
    // {
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');
    //     $userModel = new User();
    //     $user = $userModel->getUserByEmail($email);
    //     if ($user['email'] == $email && $user['password'] == $password) {
    //         // Login berhasil, simpan informasi pengguna ke dalam session
    //         $session = session();
    //         $session->set('id', $user['id']);
    //         return redirect()->to(base_url('/container'));
    //     } else {
    //         $url = base_url('/form_login') . '?show_register=true';
    //         echo '<script>
    //             alert("Password Tidak Sama");
    //             window.location.href = "' . $url . '";
    //         </script>';
    //     }
    // }

    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }
}
