<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('motor_id')->nullable();
            $table->unsignedBigInteger('mobil_id')->nullable();
            $table->char('nama', 50);
            $table->char('desa', 50);
            $table->text('alamat');
            $table->char('no_hp');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('no action');
            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
