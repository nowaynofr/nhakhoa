<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tintuc;

class TintucSeeder extends Seeder
{
    public function run()
    {
        Tintuc::create([
            'TieuDe' => 'Tin tức 1',
            'LoaiTinTucId' => 1,
            'TacGia' => 'Người viết',
            'NgayViet' => '2023-11-03',
            'NoiDung' => 'Nội dung tin tức 1',
        ]);

        // Thêm dữ liệu cho các bản ghi khác tại đây
    }
}
