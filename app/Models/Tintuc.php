<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    protected $table = 'tintuc';

    protected $fillable = [
        'TieuDe',
        'LoaiTinTucId',
        'TacGia',
        'NgayViet',
        'NoiDung',
    ];

    public function loaiTinTuc()
    {
        return $this->belongsTo(Loaitintuc::class, 'LoaiTinTucId');
    }
}
