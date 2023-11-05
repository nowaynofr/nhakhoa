<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vattu extends Model
{
    
    protected $table = 'vattu';

    protected $fillable = [
        'TenVT',
        'LoaiVatTuID',
        'MaDonVi',
        'SoLuong',
    ];

    public function loaiVatTu()
    {
        return $this->belongsTo(Loaivattu::class, 'LoaiVatTuID');
    }
}
