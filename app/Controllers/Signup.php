<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserReg;
  
class Signup extends Controller
{
    public function reg_auth()
    {
        $model = new UserReg;

        $plainPassword = $this->request->getPost("password");
        $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);



        $data = array(
            'email' => $this->request->getPost("email"),
            'password' => $hashedPassword,
            'level' => '0'
        );
        $f2a = $this->request->getPost("repassword");
        $hashedPassword2 = password_hash($f2a, PASSWORD_DEFAULT);

        // print_r($hashedPassword2);

        if ($data['password'] == $hashedPassword) {    
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
