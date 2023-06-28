<?php

namespace App\Controllers;

use App\Models\FormModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        return view('contact');
    }

    function sendMail()
    {
        $subject = $this->request->getVar('subjek');
        $message = $this->request->getVar('Pesan');

        $email = \Config\Services::email();
        $email->setTo('cssmartenglish@gmail.com');
        $email->setFrom($this->request->getVar('email'), 'Confirm Registration');

        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) {
            return redirect()->to('/');
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}
