<?php

namespace App\Models;

use CodeIgniter\Model;

class Country extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'country';
    protected $primaryKey       = 'id_country';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
