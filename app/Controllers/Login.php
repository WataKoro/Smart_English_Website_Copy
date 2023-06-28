<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'email'    => $data['email'],
                    'fname'    => $data['fname'],
                    'lname'    => $data['lname'],
                    'eduStage'    => $data['eduStage'],
                    'eduGrade'    => $data['eduGrade'],
                    'school'    => $data['school'],
                    'birthPlace'    => $data['birthPlace'],
                    'birthDate'    => $data['birthDate'],
                    'parentJob'    => $data['parentJob'],
                    'Location'    => $data['Location'],
                    'province'    => $data['province'],
                    'city'    => $data['city'],
                    'address'    => $data['address'],
                    'phone'    => $data['phone'],
                    'programName'    => $data['programName'],
                    'programSchedule'    => $data['programSchedule'],
                    'profilePicture'    => $data['profilePicture'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
