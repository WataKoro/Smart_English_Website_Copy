<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tregistrasi';
    protected $allowedFields = ['email', 'password', 'fname', 'lname', 'eduStage', 'eduGrade', 'school', 'birthPlace', 'birthDate', 'parentJob', 'Location', 'province', 'city', 'address', 'phone', 'programName', 'programSchedule', 'profilePicture'];
}
