<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;

class usersModel extends Model
{
     protected $table      = 'users';
     protected $primaryKey = 'id';

     protected $useAutoIncrement = true;

     protected $returnType     = User::class;
     protected $useSoftDeletes = true;

     protected $allowedFields = ['username', 'email','password','group'];

     // Dates
     protected $useTimestamps = true;
     protected $dateFormat    = 'datetime';
     protected $createdField  = 'created_at';
     protected $updatedField  = 'updated_at';
     protected $deletedField  = 'deleted_at';

     protected $assignGroup;
   public function withGroup(string $group){
     $row = $this->db->table('groups')
               ->where('name_group ',$group)
               ->get()->getFirstRow();
     if($row != null){
          $this->assignGroup = $row->id_group;
     }
   }
}
