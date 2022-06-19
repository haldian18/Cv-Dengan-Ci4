<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiri extends Model
{
    protected $table = 'datadiri';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'nama',
        'alamat',
        'kontak',
        'email',
        'pergruan_tinggi',
        'sma',
        'smp',
        'tanggal_lahir',
        'tempat_lahir'
    ];
}
