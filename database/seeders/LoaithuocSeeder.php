<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loaithuoc;

class LoaithuocSeeder extends Seeder
{
    public function run()
    {
        Loaithuoc::create(['LoaiThuoc' => 'Thuốc răng']);
        Loaithuoc::create(['LoaiThuoc' => 'Thuốc giảm đau']);
        Loaithuoc::create(['LoaiThuoc' => 'Thuốc tiêm']);
    }
}
