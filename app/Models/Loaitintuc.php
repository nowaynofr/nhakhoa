<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaitintuc extends Model
{
    protected $table = 'loaitintuc';
    protected $fillable = [
        'LoaiTinTuc',
    ];
    protected $guarded = [];
    use HasFactory;
}
