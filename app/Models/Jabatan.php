<?php

namespace App\Models;

use CodeIgniter\Model;

class Jabatan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jabatan';
    protected $primaryKey       = 'id_jabatan';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
