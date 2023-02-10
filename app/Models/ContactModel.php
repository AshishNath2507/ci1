<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'contact';

    public function registerUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}   