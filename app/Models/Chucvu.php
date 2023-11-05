<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chucvu extends Model
{
    protected $table = 'chucvu';
    protected $fillable = [
        'ChucVu',
    ];

    protected $guarded = [];
    use HasFactory;
}
