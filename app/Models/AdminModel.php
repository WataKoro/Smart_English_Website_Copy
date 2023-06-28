<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'tadmin';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password'];

    public function getUser($username)
    {
        return $this->where(['username' => $username])->first();
    }
}
