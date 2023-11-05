<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benhnhan extends Model
{
    protected $table = 'benhnhan';

    // Các trường có thể gán dữ liệu
    protected $fillable = [
        'HoVaTen',
        'GioiTinh',
        'NgaySinh',
        'CMND',
        'DiaChi',
        'CanNang',
        'ChieuCao',
        'NhomMau',
    ];

    // Các trường không được gán dữ liệu
    protected $guarded = [];
}
