<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'c_id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['c_name, c_email, c_phone, c_message'];

    // public function saveContactData($data)
    // {

    //     $db = \Config\Database::connect();
    //     $builder = $db->table('contact');
    //     $res = $builder->insert($data);

    //     if ($res->connID->affected_rows >= 1) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
