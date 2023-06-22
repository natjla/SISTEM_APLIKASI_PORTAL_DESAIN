<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table      = 'tbl_anggota';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'foto', 'tentang', 'status', 'created_at'];
}
