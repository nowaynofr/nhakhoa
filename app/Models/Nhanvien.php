<?php

namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $table = 'nhanvien';

    protected $fillable = [
        'HoVaTen',
        'GioiTinh',
        'NgaySinh',
        'DiaChi',
        'MaChucVu',
        'MaTaiKhoan',
        
    ];

    public function chucVu()
    {
        return $this->belongsTo(Chucvu::class, 'MaChucVu');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'MaTaiKhoan');
    }

    
}
