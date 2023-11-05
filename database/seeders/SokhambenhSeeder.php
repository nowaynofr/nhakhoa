<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sokhambenh;

class SokhambenhSeeder extends Seeder
{
    public function run()
    {
        Sokhambenh::create([
            'MaBenhNhan' => 1,
            'MaBacSi' => 3,
            'ChanDoanBenh' => '...',
            'TrangThai' => 'DangDieutri',
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
