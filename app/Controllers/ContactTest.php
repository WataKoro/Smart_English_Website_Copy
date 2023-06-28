<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Test\CIUnitTestCase;
use App\Models\FormModel;
use App\Controllers\Contact;

class ContactTest extends CIUnitTestCase
{
    public $artikelModel;

    public function testContact()
    {
        $subject = 'subjek';
        $message = 'Pesan';

        $email = \Config\Services::email();
        $email->setTo('cssmartenglish@gmail.com');
        $email->setFrom(('email'), 'Confirm Registration');

        $email->setSubject($subject);
        $email->setMessage($message);
        $result = $email->send();
        $this->assertTrue($result);
    }
}