<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaidichvu extends Model
{
    protected $table = 'loaidichvu';

    // Các trường có thể gán dữ liệu
    protected $fillable = [
        'LoaiDichVu',
    ];

    // Các trường không được gán dữ liệu
    protected $guarded = [];
    use HasFactory;
}
