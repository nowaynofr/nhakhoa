<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->id();
            $table->string('TieuDe');
            $table->unsignedBigInteger('LoaiTinTucId');
            $table->string('TacGia')->nullable();
            $table->date('NgayViet');
            $table->text('NoiDung');
            $table->timestamps();
            $table->foreign('LoaiTinTucId')->references('id')->on('loaitintuc');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tintuc');
    }
};
