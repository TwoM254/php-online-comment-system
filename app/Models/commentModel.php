<?php
namespace App\Models;

use CodeIgniter\Model;

class commentModel extends Model 
{
    protected $table = 'post_comment';
    protected $priarykey = 'id';
    protected $allowedFields = ['fname','lname','gender','phone','comment'];
}
?>