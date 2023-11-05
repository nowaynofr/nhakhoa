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
        Schema::create('hoadon', function (Blueprint $table) {
            $table->id();
            $table->string('TenHoaDon');
            $table->unsignedBigInteger('MaNhanVien');
            $table->unsignedBigInteger('MaTienTrinhDieutri');
            $table->date('NgayLap')->default(now());
            $table->unsignedBigInteger('MaBenhNhan');
            $table->integer('khuyenmai');
            $table->double('TongSoTien');
            $table->enum('TrangThai', ['DaThanhToan', 'ChuaThanhToan', 'Huy'])->default('ChuaThanhToan');
            $table->integer('MaTienTrinh');
            $table->timestamps();
            $table->foreign('MaBenhNhan')->references('id')->on('benhnhan');
            $table->foreign('MaNhanvien')->references('id')->on('nhanvien');
            $table->foreign('MaTienTrinhDieutri')->references('id')->on('tientrinhdieutri');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
};
