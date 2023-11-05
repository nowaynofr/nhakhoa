<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donvitinh;

class DonvitinhSeeder extends Seeder
{
    public function run()
    {
        Donvitinh::create(['DonVi' => 'Viên', 'HeSo' => 1.0]);
        Donvitinh::create(['DonVi' => 'Vỉ', 'HeSo' => 6.0]);
        Donvitinh::create(['DonVi' => 'Gói', 'HeSo' => 12.0]);
    }
}

