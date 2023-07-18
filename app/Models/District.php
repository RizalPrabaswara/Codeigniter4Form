<?php

namespace App\Models;

use CodeIgniter\Model;

class District extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'districts';
    protected $primaryKey       = 'id_district';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
