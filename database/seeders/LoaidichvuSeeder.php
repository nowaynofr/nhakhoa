<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loaidichvu;

class LoaidichvuSeeder extends Seeder
{
    public function run()
    {
        Loaidichvu::create(['LoaiDichVu' => 'Khám bệnh']);
        Loaidichvu::create(['LoaiDichVu' => 'Xét nghiệm']);
        Loaidichvu::create(['LoaiDichVu' => 'Phẫu thuật']);
    }
}
