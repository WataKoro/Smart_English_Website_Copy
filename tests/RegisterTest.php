<?php

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UserModel;

class RegisterTest extends CIUnitTestCase
{
    private $model;
    public function setUp(): void
    {
        parent::setUp();

        // Load the necessary dependencies
        // For example, you might load the model or helper
        $this->model = new \App\Models\UserModel();
    }
    public function testRegistration()
    {
            // Simulate the registration process
            $model = new UserModel();
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
        $model = $this->assertTrue($result);
        $this->assertNotNull($model);
    }
}