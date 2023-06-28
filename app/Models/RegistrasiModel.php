<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
    protected $table      = 'tregistrasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'email', 'password', 'fname', 'lname', 'eduStage', 'eduGrade', 'school', 'birthPlace', 'birthDate', 'parentJob', 'Location', 'province', 'city', 'address', 'phone', 'programName', 'programSchedule'];

    public function getRegistrasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
