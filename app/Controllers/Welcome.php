<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Welcome extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {

        $message = [];
        $data = [
            'page_title' => "CI4",
            'page_heading' => "About Catering"
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];

        if ($this->request->getMethod() == 'POST') {
            if ($this->validate($rules)) {
                echo "yes";
            } else {
                $message['error'] = $this->validator;
            }

        }
        return view('newview', $data);
    }

    public function methodName()
    {
        $name = "Ashish";
        echo "hello " . $name;
    }
}
