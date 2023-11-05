
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sokhambenh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MaBenhNhan');
            $table->unsignedBigInteger('MaBacSi');
            $table->string('ChanDoanBenh');
            $table->enum('TrangThai', ['DangDieutri', 'ThanhCong', 'Huy', 'ChoPheDuyet'])->default('ChoPheDuyet');
            $table->timestamps();
            $table->foreign('MaBenhNhan')->references('id')->on('benhnhan');
            $table->foreign('MaBacSi')->references('id')->on('nhanvien');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('sokhambenh');
    }
};

