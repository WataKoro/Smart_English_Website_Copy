<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        return view('profile');
    }

    public function save()
    {
        $session = session();
        $profilePicture = $this->request->getFile('profilePicture');
        $profilePicture->move('assets/profile');

        $pictureName = $profilePicture->getName();
        //include helper form
        helper(['form']);

        $model = new UserModel();
        $data = [
            'id'                   => $session->get('id'),
            'profilePicture'       => $pictureName,
        ];
        $model->save($data);
        $_SESSION["profilePicture"] = $pictureName;
        return redirect()->to('/');
    }
}
