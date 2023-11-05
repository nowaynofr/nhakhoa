<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tientrinhdieutri;

class TientrinhdieutriSeeder extends Seeder
{
    public function run()
    {
        Tientrinhdieutri::create([
            'MaSoKhamBenh' => 1,
            'NgayDieuTri' => '2023-11-03',
            'ChiTietDieuTri' => '...',
            'MaThuoc' => 1,
            'Sothuoc' => 3,
            'MaVatTu' => 2,
            'SoVatTu' => 2,
            'MaDichVu' => 1,
            'MaBacSi' => 3,
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
