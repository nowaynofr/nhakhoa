<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vattu;

class VattuSeeder extends Seeder
{
    public function run()
    {
        Vattu::create([
            'TenVT' => 'răng sư non',
            'LoaiVatTuID' => 2,
            'MaDonVi' => 2,
            'SoLuong' => 10,
        ]);

        Vattu::create([
            'TenVT' => 'răng sứ già',
            'LoaiVatTuID' => 2,
            'MaDonVi' => 1,
            'SoLuong' => 5,
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
