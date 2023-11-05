<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thuoc extends Model
{
    protected $table = 'thuoc';

    protected $fillable = [
        'TenThuoc',
        'LoaiThuocID',
        'MaDonVi',
        'CongDung',
        'CachDung',
        'SoLuong',
        'HSD',
    ];

    public function loaiThuoc()
    {
        return $this->belongsTo(Loaithuoc::class, 'LoaiThuocID');
    }

    public function donViTinh()
    {
        return $this->belongsTo(Donvitinh::class, 'MaDonVi');
    }
}