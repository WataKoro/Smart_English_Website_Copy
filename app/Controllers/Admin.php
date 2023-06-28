<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function admin_statistik()
    {
        echo view('admin/statistik');
    }
    public function admin_infoAkun()
    {
        echo view('admin/info_akun');
    }
    public function admin_testi()
    {
        echo view('admin/testi');
    }
    public function admin_organisasi()
    {
        echo view('admin/organisasi');
    }
    public function admin_artikel()
    {
        echo view('admin/artikel');
    }
}
