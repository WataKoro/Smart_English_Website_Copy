<?php

namespace App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Controllers\Register;

class RegisterTest extends CIUnitTestCase
{
    private $model;
    private $result;

    public function testRegistration()
    {
            // Simulate the registration process
            $this->model = new UserModel();
            $data = [
                'email'                 => 'test@gmail.com',
                'password'              => 'testtesttest',
                'fname'                 => 'test',
                'lname'                 => 'test',
                'eduStage'              => 'test',
                'eduGrade'              => 'test',
                'school'                => 'test',
                'birthPlace'            => 'test',
                'birthDate'             => 'test',
                'parentJob'             => 'test',
                'Location'              => 'test',
                'province'              => 'test',
                'city'                  => 'test',
                'address'               => 'test',
                'phone'                 => 'test',
                'programName'           => 'test',
                'programSchedule'       => 'test',
                'profilePicture'        => "DefaultProf.png"
            ];
            $result = $this->model->save($data);
        // Assert the expected outcome
        $this->assertTrue($result);
        $this->assertNotNull($this->model);
    }
}