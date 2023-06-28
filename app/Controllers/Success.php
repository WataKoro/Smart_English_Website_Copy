<?php

namespace App\Controllers;

class Success extends BaseController
{
    public function index()
    {
        $session = session();
        return view('success');
    }
}
