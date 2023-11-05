<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('vattu', function (Blueprint $table) {
            $table->id();
            $table->string('TenVT');
            $table->unsignedBigInteger('LoaiVatTuID');
            $table->unsignedBigInteger('MaDonVi');
            $table->integer('SoLuong')->nullable();
            $table->timestamps();
            $table->foreign('LoaiVatTuID')->references('id')->on('loaivattu');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vattu');
    }
};
