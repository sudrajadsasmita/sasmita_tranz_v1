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
        Schema::create('ta_transaction_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("crew_id")->constrained("ta_crews")->onDelete("cascade");
            $table->foreignId("customer_id")->constrained("users")->onDelete("cascade");
            $table->text("pickup_location");
            $table->dateTime("pickup_time");
            $table->dateTime("back_time");
            $table->bigInteger("total_price");
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
        Schema::dropIfExists('ta_transaction_details');
    }
};
