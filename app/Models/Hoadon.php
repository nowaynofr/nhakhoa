<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    protected $table = 'hoadon';

    protected $fillable = [
        'TenHoaDon',
        'MaNhanVien',
        'MaTienTrinhDieutri',
        'NgayLap',
        'MaBenhNhan',
        'khuyenmai',
        'TongSoTien',
        'TrangThai',
        'MaTienTrinh',
    ];

    public function benhnhan()
    {
        return $this->belongsTo(Benhnhan::class, 'MaBenhNhan');
    }

    public function nhanvien()
    {
        return $this->belongsTo(Nhanvien::class, 'MaNhanVien');
    }

    public function tientrinhdieutri()
    {
        return $this->hasMany(Tientrinhdieutri::class, 'MaTienTrinhDieutri');
    }
}
