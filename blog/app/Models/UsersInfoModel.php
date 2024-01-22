<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;


class usersInfoModel extends Model
{
  protected $table      = 'info_users';
  protected $primaryKey = 'id_user';

  protected $useAutoIncrement = true;

  protected $returnType     = User::class;
  protected $useSoftDeletes = true;

  protected $allowedFields = ['name', 'surname', 'id_country'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  
 

 
}
