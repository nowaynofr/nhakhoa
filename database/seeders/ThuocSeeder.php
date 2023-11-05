<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thuoc;

class ThuocSeeder extends Seeder
{
    public function run()
    {
        Thuoc::create([
            'TenThuoc' => 'Thuốc A',
            'LoaiThuocID' => 1,
            'MaDonVi' => 2,
            'CongDung' => 'Dùng cho bệnh A',
            'CachDung' => 'Uống 2 lần/ngày',
            'SoLuong' => 50,
            'HSD' => '2023-12-31',
        ]);

        
    }
}