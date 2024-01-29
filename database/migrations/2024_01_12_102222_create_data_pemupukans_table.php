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
        Schema::create('data_pemupukans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estate_id');
            $table->foreignId('divisi_id');
            $table->foreignId('field_id');
            $table->foreignId('semester_id');
            $table->string('status');
            $table->foreignId('pupuk_id');
            $table->double('total');
            $table->double('req');
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
        Schema::dropIfExists('data_pemupukans');
    }
};
