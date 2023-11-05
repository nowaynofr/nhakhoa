<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loaivattu;

class LoaivattuSeeder extends Seeder
{
    public function run()
    {
        Loaivattu::create(['LoaiVatTu' => 'Vật tư y tế']);
        Loaivattu::create(['LoaiVatTu' => 'kim tiêm']);
        Loaivattu::create(['LoaiVatTu' => 'găng tay']);
    }
}