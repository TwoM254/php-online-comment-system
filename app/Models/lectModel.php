<?php
namespace App\Models;

use CodeIgniter\Model;

class lectModel extends Model 
{
    protected $table = 'lecture_tbl';
    protected $priarykey = 'id';
    protected $allowedFields = ['fname','lname','email','password'];
}
?>