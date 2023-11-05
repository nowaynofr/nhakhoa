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
        Schema::create('benhnhan', function (Blueprint $table) {
            $table->id();
            $table->string('HoVaTen');
            $table->enum('GioiTinh', ['nam', 'nu'])->default('nam');
            $table->date('NgaySinh')->nullable();
            $table->integer('CMND')->nullable();
            $table->string('DiaChi')->nullable();
            $table->float('CanNang')->nullable();
            $table->float('ChieuCao')->nullable();
            $table->string('NhomMau', 2)->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benhnhan');
    }
};
