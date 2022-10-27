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
        Schema::create('ta_profiles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->date("date_birth");
            $table->string("phone");
            $table->text("address");
            $table->string("photo");
            $table->foreignId("role_id")->constrained("ma_roles")->onDelete("cascade");
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
        Schema::dropIfExists('ta_profiles');
    }
};
