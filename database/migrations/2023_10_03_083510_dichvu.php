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
        
        Schema::create('dichvu', function (Blueprint $table) {
            $table->id();
            $table->string('TenDichVu');
            $table->unsignedBigInteger('MaLoaiDichVu');
            $table->string('MoTa')->nullable();
            $table->double('Gia')->default(0);
            $table->timestamps();
            $table->foreign('MaLoaiDichVu')->references('id')->on('loaidichvu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dichvu');
    }
};
