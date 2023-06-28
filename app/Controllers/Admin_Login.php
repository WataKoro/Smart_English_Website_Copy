<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin_Login extends BaseController
{
    public $usermodel;

    public function __construct()
    {
        $this->usermodel = new AdminModel();
    }

    public function index()
    {
        return view('admin/login_admin/index');
    }

    public function process()
    {
        // $session = session();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $this->usermodel->getUser($username);

        if ($dataUser) {
            if ($password == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'password' => $dataUser['password'],
                    'logged_in' => TRUE
                ]);

                return redirect()->to(base_url('admin/dashboard/'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/admin');
    }
}
