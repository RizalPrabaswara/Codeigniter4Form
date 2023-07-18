<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'id_jabatan', 'skill', 'email', 'password', 'phone', 'address', 'id_country', 'id_city', 'id_district', 'sampul'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function selectData($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $query = $builder->get();
        return $query->getResult();
    }
    
    // function getAll()
    // {
    //     $builder = $this->db->table('users');
    //     $builder->join('jabatan', 'jabatan.id_jabatan = users.id_jabatan');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    // function getAll2()
    // {
    //     $builder = $this->db->table('users');
    //     $builder->join('skill', 'skill.id_skill = users.id_skill');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    // function getAll3()
    // {
    //     $builder = $this->db->table('users');
    //     $builder->join('country', 'country.id_country = users.id_country');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    // function getAll4()
    // {
    //     $builder = $this->db->table('country');
    //     $builder->join('cities', 'cities.id_city = country.id_city');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }

    // function getAll5()
    // {
    //     $builder = $this->db->table('cities');
    //     $builder->join('districts', 'districts.id_district = cities.id_district');
    //     $query = $builder->get();
    //     return $query->getResult();
    // }
}
