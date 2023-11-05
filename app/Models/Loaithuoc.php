<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaithuoc extends Model
{
    protected $table = 'loaithuoc';

    // Các trường có thể gán dữ liệu
    protected $fillable = [
        'LoaiThuoc',
    ];

    // Các trường không được gán dữ liệu
    protected $guarded = [];
    use HasFactory;
}
