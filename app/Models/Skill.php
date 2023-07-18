<?php

namespace App\Models;

use CodeIgniter\Model;

class Skill extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'skill';
    protected $primaryKey       = 'id_skill';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
