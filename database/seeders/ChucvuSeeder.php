<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chucvu;

class ChucvuSeeder extends Seeder
{
    public function run()
    {
        Chucvu::create(['ChucVu' => 'Bác Sĩ']);
        Chucvu::create(['ChucVu' => 'Y Tá']);
        Chucvu::create(['ChucVu' => 'Tiếp Tân']);
    }
}
