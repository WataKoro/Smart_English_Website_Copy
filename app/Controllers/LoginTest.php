<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UserModel;
use App\Controllers\Login;

class LoginTest extends CIUnitTestCase
{
    private $model;

    public function testLogin()
    {   
        $session = session();
        $model = new UserModel();
        $email = 'test@gmail.com';
        $password = 'testtesttest';
        $data = $model->where('email', $email)->first();
        $pass = $data['password'];
        if ($pass == $password) {
            $ses_data = [
            'logged_in'     => TRUE
            ];
            $session->set($ses_data);
        }
        // Assert the expected outcome
        $this->assertTrue(session()->get('logged_in'));
    }
}