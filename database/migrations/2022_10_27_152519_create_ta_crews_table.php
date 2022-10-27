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
        Schema::create('ta_crews', function (Blueprint $table) {
            $table->id();
            $table->foreignId("vehicle_id")->constrained("ma_vehicles")->onDelete("cascade");
            $table->foreignId("driver_id")->constrained("users")->onDelete("cascade");
            $table->foreignId("helper_id")->constrained("users")->onDelete("cascade");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_crews');
    }
};
