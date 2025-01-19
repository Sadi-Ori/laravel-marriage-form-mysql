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
            $table->string('witnessname');
            $table->string('witnessaddress');
            
            $table->string('husbandwitnessname');
            $table->string('husbandwitnessfathername');
            $table->string('husbandwitnessmothername');
            $table->string('husbandwitnessaddress');

            $table->string('wifewitnessname');
            $table->string('wifewitnessfathername');
            $table->string('wifewitnessmothername');
            $table->string('wifewitnessaddress');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_form_witness');
    }
};
 //