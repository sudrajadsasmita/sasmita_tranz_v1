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
        Schema::create('ma_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("registration_number");
            $table->string("class");
            $table->string("status");
            $table->bigInteger("price");
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
        Schema::dropIfExists('ma_vehicles');
    }
};
