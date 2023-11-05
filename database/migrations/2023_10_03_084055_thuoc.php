<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('thuoc', function (Blueprint $table) {
            $table->id();
            $table->string('TenThuoc');
            $table->unsignedBigInteger('LoaiThuocID');
            $table->unsignedBigInteger('MaDonVi');
            $table->string('CongDung')->nullable();
            $table->string('CachDung')->nullable();
            $table->integer('SoLuong')->nullable();
            $table->date('HSD')->nullable();
            $table->timestamps();
            $table->foreign('LoaiThuocID')->references('id')->on('loaithuoc');
            $table->foreign('MaDonVi')->references('id')->on('donvitinh');
        });
    }

    public function down()
    {
        Schema::dropIfExists('thuoc');
    }
};
