<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Benhnhan;

class BenhnhanSeeder extends Seeder
{
    public function run()
    {
        Benhnhan::create([
            'HoVaTen' => 'Nguyễn Văn A',
            'GioiTinh' => 'nam',
            'NgaySinh' => '1990-01-15',
            'CMND' => 123456789,
            'DiaChi' => '123 Đường ABC, Quận XYZ',
            'CanNang' => 70.5,
            'ChieuCao' => 175.0,
            'NhomMau' => 'A+',
        ]);

        Benhnhan::create([
            'HoVaTen' => 'Nguyễn Thị B',
            'GioiTinh' => 'nu',
            'NgaySinh' => '1995-04-20',
            'CMND' => 987654321,
            'DiaChi' => '456 Đường XYZ, Quận ABC',
            'CanNang' => 60.5,
            'ChieuCao' => 160.0,
            'NhomMau' => 'B-',
        ]);

        // Thêm các dòng dữ liệu khác tương tự cho bảng 'benhnhan'
    }
}