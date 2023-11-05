<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tientrinhdieutri', function (Blueprint $table) {
            $table->id();
            $table->integer('MaSoKhamBenh');
            $table->date('NgayDieuTri');
            $table->binary('HinhAnhXetNghiem')->nullable()->comment('Trường để lưu hình ảnh xét nghiệm');
            $table->text('ChiTietDieuTri')->nullable();
            $table->unsignedBigInteger('MaBacSi');
            $table->unsignedBigInteger('MaThuoc')->nullable();
            $table->integer('Sothuoc')->nullable();
            $table->unsignedBigInteger('MaVatTu')->nullable();
            $table->integer('SoVatTu')->nullable();
            $table->unsignedBigInteger('MaDichVu')->nullable();
            $table->timestamps();
            $table->foreign('MaThuoc')->references('id')->on('thuoc');
            $table->foreign('MaVatTu')->references('id')->on('vattu');
            $table->foreign('MaBacSi')->references('id')->on('nhanvien');
            $table->foreign('MaDichVu')->references('id')->on('dichvu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tientrinhdieutri');
    }
};
