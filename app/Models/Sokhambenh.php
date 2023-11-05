<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sokhambenh extends Model
{
    protected $table = 'sokhambenh';

    protected $fillable = [
        'MaBenhNhan',
        'MaBacSi',
        'ChanDoanBenh',
        'TrangThai',
    ];

    public function benhnhan()
    {
        return $this->belongsTo(Benhnhan::class, 'MaBenhNhan');
    }

    public function bacsy()
    {
        return $this->belongsTo(Nhanvien::class, 'MaBacSi');
    }
}
