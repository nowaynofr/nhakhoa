<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donvitinh extends Model
{
    protected $table = 'donvitinh';


    protected $fillable = [
        'DonVi',
        'HeSo',
    ];

    protected $guarded = [];
    use HasFactory;
}
