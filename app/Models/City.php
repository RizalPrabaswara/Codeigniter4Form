<?php

namespace App\Models;

use CodeIgniter\Model;

class City extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cities';
    protected $primaryKey       = 'id_city';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
