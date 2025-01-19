<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marriage_form', function (Blueprint $table){

            $table->id();
            $table->string('name');
            $table->string('husbandfathername');
            $table->string('husbandmothername');
            $table->date('husbanddateofbirth');
            $table->string('husbandmaritalstatus');
            $table->string('zipcode');
            $table->string('state');
            $table->string('address');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_form');
    }
};
