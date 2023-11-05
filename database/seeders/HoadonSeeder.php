<?php

use Illuminate\Database\Seeder;
use App\Models\Hoadon;

class HoadonSeeder extends Seeder
{
    public function run()
    {
        Hoadon::create([
            'TenHoaDon' => 'Hoa Don 1',
            'MaNhanVien' => 3,
            'MaTienTrinhDieutri' => 1,
            'MaBenhNhan' => 1,
            'khuyenmai' => 0,
            'TongSoTien' => 1000.0,
            'TrangThai' => 'ChuaThanhToan',
            'MaTienTrinh' => 2,
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
