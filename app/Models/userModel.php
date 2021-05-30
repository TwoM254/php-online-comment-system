<?php
namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model 
{
    protected $table = 'users';
    protected $priarykey = 'id';
    protected $allowedFields = ['username','email','gender','reg_no','password'];
}
?>