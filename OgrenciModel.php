<?php

namespace App\Models;

use CodeIgniter\Model;

class OgrenciModel extends Model
{
    protected $table = 'ogrenci_not';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'ogrenci_adi',
        'ders',
        'vize',
        'final',
        'ortalama',
        'harf_notu'
    ];
}
