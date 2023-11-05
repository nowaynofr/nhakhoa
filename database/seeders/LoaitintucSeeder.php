<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loaitintuc;

class LoaitintucSeeder extends Seeder
{
    public function run()
    {
        Loaitintuc::create(['LoaiTinTuc' => 'Sức khỏe']);
        Loaitintuc::create(['LoaiTinTuc' => 'Răng  hàm']);
        Loaitintuc::create(['LoaiTinTuc' => 'khuyến mãi']);
    }
}
