<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserReg;
  
class Signup extends Controller
{
    public function reg_auth()
    {
        $model = new UserReg;

        $data = array(
            'email' => $this->request->getPost("email"),
            'password' => $this->request->getPost("password")
        );
        $f2a = $this->request->getPost("repassword");

        if ($data['password'] == $f2a) {    
            $model->userdata($data); //fungsi dari app/Models/UserReg::userdata
            echo '<script>
                alert("Selamat! Berhasil Menambah Data");
                window.location="' . base_url('/about') . '"
            </script>';        
        } else {
            $url = base_url('/form_login');
            echo '<script>
                alert("Password Salah");
                window.location.href = "' . $url . '";
            </script>';
        }
    }  
}