<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $table = new \CodeIgniter\View\Table();

        $db = \Config\Database::connect();
        
        $query = $db->query("select * from course_table");
        $result = $query-> getResultArray();
        echo $table->generate($result);
        
    }

}
