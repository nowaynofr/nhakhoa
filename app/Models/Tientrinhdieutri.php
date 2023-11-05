<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tientrinhdieutri extends Model
{
    protected $table = 'tientrinhdieutri';

    protected $fillable = [
        'MaSoKhamBenh',
        'NgayDieuTri',
        'HinhAnhXetNghiem',
        'ChiTietDieuTri',
        'MaBacSi',
        'MaThuoc',
        'Sothuoc',
        'MaVatTu',
        'SoVatTu',
        'MaDichVu',
    ];

    public function thuoc()
    {
        return $this->belongsTo(Thuoc::class, 'MaThuoc');
    }

    public function vattu()
    {
        return $this->belongsTo(Vattu::class, 'MaVatTu');
    }

    public function dichvu()
    {
        return $this->belongsTo(Dichvu::class, 'MaDichVu');
    }

    public function bacsy()
    {
        return $this->belongsTo(Nhanvien::class, 'MaBacSi');
    }
}
