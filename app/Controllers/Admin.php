<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $session;


    public function index()
    {
        $header = view('admin/template/header');
        $mainContent = view('admin/index');
        $fullView = $header . $mainContent;
        
        return $this->response->setBody($fullView);
    }

    public function form_tambah_kendaraan()
    {
        $header = view('admin/template/header');
        $mainContent = view('admin/form_tambah_kendaraan');
        $fullView = $header . $mainContent;
        
        return $this->response->setBody($fullView);
    }

    public function form_sopir()
    {
        $header = view('admin/template/header');
        $mainContent = view('admin/form_sopir');
        $fullView = $header . $mainContent;
        
        return $this->response->setBody($fullView);
    }

    public function tables()
    {
        $header = view('admin/template/header');
        $mainContent = view('admin/tables');
        $fullView = $header . $mainContent;
        
        return $this->response->setBody($fullView);
    }
}
