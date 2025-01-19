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
        Schema::create('marriage_form_lawer', function (Blueprint $table){

            $table->id();
            $table->string('lawername');
            $table->string('alweraddress');
            
            $table->string('husbandlawername');
            $table->string('husbandlawerfathername');
            $table->string('husbandlawermothername');
            $table->string('husbandlaweraddress');

            $table->string('wifelawername');
            $table->string('wifelawerfathername');
            $table->string('wifelawermothername');
            $table->string('wifelaweraddress');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_form_lawer');
    }
};
