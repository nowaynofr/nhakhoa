<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaivattu extends Model
{
    protected $table = 'loaivattu';

    // Các trường có thể gán dữ liệu
    protected $fillable = [
        'LoaiVatTu',
    ];

    // Các trường không được gán dữ liệu
    protected $guarded = [];
    use HasFactory;
}
