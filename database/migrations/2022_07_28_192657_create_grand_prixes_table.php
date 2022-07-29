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
        Schema::create('grand_prixes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('race_id')->constrained('races')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('driver_id')->constrained('drivers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('grand_prixes');
    }
};
