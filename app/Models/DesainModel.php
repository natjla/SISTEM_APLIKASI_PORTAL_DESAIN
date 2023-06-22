<?php

namespace App\Models;

use CodeIgniter\Model;

class DesainModel extends Model
{
    protected $table      = 'tbl_desain';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'nama', 'kunci', 'status', 'created_at'];

    public function search($id)
    {
        $builder = $this->table($this->table);

        // Lakukan pencarian dengan query LIKE
        $builder->like('nama', $id);

        $builder->where('status', '0');

        // Ambil hasil pencarian
        $query = $builder->get();

        return $query->getResult();
    }
}
