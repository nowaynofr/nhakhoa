<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dichvu;

class DichvuSeeder extends Seeder
{
    public function run()
    {
        Dichvu::create([
            'TenDichVu' => 'Dịch vụ A',
            'MaLoaiDichVu' => 1,
            'MoTa' => 'Mô tả dịch vụ A',
            'Gia' => 50.000,
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
