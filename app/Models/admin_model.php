<?php
namespace App\Models;

use CodeIgniter\Model;

class admin_model extends Model 
{
    protected $table = 'admin';
    protected $priarykey = 'id';
    protected $allowedFields = ['username','password'];
}
?>