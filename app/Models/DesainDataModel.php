<?php

namespace App\Models;

use CodeIgniter\Model;

class DesainDataModel extends Model
{
    protected $table      = 'tbl_desain_data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'gambar', 'tentang','karya', 'kunci', 'status', 'created_at'];

}
