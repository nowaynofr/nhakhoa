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
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->id();
            $table->string('HoVaTen');
            $table->enum('GioiTinh', ['nam', 'nu'])->default('nam');
            $table->date('NgaySinh')->nullable();
            $table->string('DiaChi', 500)->nullable();
            $table->unsignedBigInteger('MaChucVu');
            $table->unsignedBigInteger('MaTaiKhoan')->nullable();
            $table->timestamps();
            $table->foreign('MaChucVu')->references('id')->on('chucvu');
            $table->foreign('MaTaiKhoan')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
};
