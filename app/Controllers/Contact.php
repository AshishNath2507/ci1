<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
// use CodeIgniter\HTTP\RequestInterface;

use App\Models\ContactModel;

class Contact extends Controller
{
    protected $request;
    // public $contactModel;

    public function __construct()
    {
        helper('form');
        helper('Form_helper');
        $this->contactModel = new ContactModel();
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        $rules = [
            'name' => [
                'rules' => 'required',
                'min_length' => 5,
                'max_length' => 20,
                'errors' => [
                    'required' => 'Name required'
                ],
            ],
            'email' => 'required|valid_email',
            'phone' => 'required|exact_length[10]|numeric',
            'message' => 'required',
        ];

        // if ($this->request->getMethod() == 'post') {

        //     if ($this->validate($rules)) {
        //         $cdata = [
        //             'c_name' => $this->request->getPost('name'),
        //             'c_email' => $this->request->getPost('email'),
        //             'c_phone' => $this->request->getPost('phone'),
        //             'c_message' => $this->request->getPost('message'),
        //         ];

        //         $status = $this->contactModel->insert($cdata);

        //         if ($status) {
        //             echo "true";
        //         } else {
        //             echo "error";
        //         }
        //     } else {
        //         $data['validation'] = $this->validator;
        //     }
        // }

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $userData = [
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password')
                ];

                $this -> contactModel->saveData($userData);

                return redirect()->to('/login')->with('message', 'Registration successful, please login.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("contact", $data);
    }
}
