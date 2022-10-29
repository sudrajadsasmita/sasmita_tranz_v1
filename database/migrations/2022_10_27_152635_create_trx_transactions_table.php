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
        Schema::create('trx_transactions', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->foreignId("transaction_detail_id")->constrained("ta_transaction_details")->onDelete("cascade");
            $table->string("proof_of_payment");
            $table->foreignId("transaction_status_id")->constrained("ma_transaction_statuses")->onDelete("cascade");
            $table->foreignId("trip_statuses_id")->constrained("ma_trip_statuses")->onDelete("cascade");
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
        Schema::dropIfExists('trx_transactions');
    }
};
