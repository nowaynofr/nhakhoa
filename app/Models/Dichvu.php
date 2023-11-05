<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
    protected $table = 'dichvu';

    protected $fillable = [
        'TenDichVu',
        'MaLoaiDichVu',
        'MoTa',
        'Gia',
    ];

    public function loaiDichVu()
    {
        return $this->belongsTo(Loaidichvu::class, 'LoaiDichVuID');
    }
}
