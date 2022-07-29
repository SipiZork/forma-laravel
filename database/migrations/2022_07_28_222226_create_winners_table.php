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
        Schema::create('winners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('race_id')->constrained('races')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('first')->constrained('drivers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('second')->constrained('drivers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('third')->constrained('drivers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('fastest')->constrained('drivers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('winners');
    }
};
