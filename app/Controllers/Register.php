<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'email'         => 'required|min_length[1]|max_length[255]|valid_email',
            'password'      => 'required|min_length[1]|max_length[255]',
            'Repassword'    => 'matches[password]',
            'fname'         => 'required|min_length[1]|max_length[255]',
            'lname'         => 'required|min_length[1]|max_length[255]',
            'eduStages'     => 'required|min_length[1]|max_length[255]',
            'eduGrades'     => 'required|min_length[1]|max_length[255]',
            'school'        => 'required|min_length[1]|max_length[255]',
            'birthPlace'    => 'required|min_length[1]|max_length[255]',
            'birthDate'     => 'required|min_length[1]|max_length[255]',
            'parentJob'     => 'required|min_length[1]|max_length[255]',
            'Location'      => 'required|min_length[1]|max_length[255]',
            'province'      => 'required|min_length[1]|max_length[255]',
            'city'          => 'required|min_length[1]|max_length[255]',
            'address'       => 'required|min_length[1]|max_length[255]',
            'phone'         => 'required|min_length[1]|max_length[255]',
            'program'       => 'required|min_length[1]|max_length[255]',
            'schedule'      => 'required|min_length[1]|max_length[255]'

        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'email'                 => $this->request->getVar('email'),
                'password'              => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'fname'                 => $this->request->getVar('fname'),
                'lname'                 => $this->request->getVar('lname'),
                'eduStage'              => $this->request->getVar('eduStages'),
                'eduGrade'              => $this->request->getVar('eduGrades'),
                'school'                => $this->request->getVar('school'),
                'birthPlace'            => $this->request->getVar('birthPlace'),
                'birthDate'             => $this->request->getVar('birthDate'),
                'parentJob'             => $this->request->getVar('parentJob'),
                'Location'              => $this->request->getVar('Location'),
                'province'              => $this->request->getVar('province'),
                'city'                  => $this->request->getVar('city'),
                'address'               => $this->request->getVar('address'),
                'phone'                 => $this->request->getVar('phone'),
                'programName'           => $this->request->getVar('program'),
                'programSchedule'       => $this->request->getVar('schedule'),
                'profilePicture'        => "DefaultProf.png"
            ];
            $model->save($data);
            return redirect()->to('/success');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
