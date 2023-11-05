<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nhanvien;

class NhanvienSeeder extends Seeder
{
    public function run()
    {
        Nhanvien::create([
            'HoVaTen' => 'Nguyen Van A',
            'GioiTinh' => 'nam',
            'NgaySinh' => '1990-01-01',
            'DiaChi' => '123 ABC Street',
            'MaChucVu' => 1,
            'MaTaiKhoan' => 1
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
