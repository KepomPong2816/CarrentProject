<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class Profil extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
}