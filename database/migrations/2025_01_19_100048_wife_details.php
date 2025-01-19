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
        Schema::create('marriage_form_wife', function (Blueprint $table){

            $table->id();
            $table->string('name');
            $table->string('wifefathername');
            $table->string('wifemothername');
            $table->date('wifedateofbirth');
            $table->string('wifemaritalstatus');
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
        Schema::dropIfExists('marriage_form_wife');
    }
};
