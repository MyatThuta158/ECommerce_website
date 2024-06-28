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
        Schema::create('Manufacturers',function(Blueprint $table){
            $table->increments('ManufacturerId')->unique();
            $table->string('ManufacturerName')->nullable(false);
            $table->string('ManufacturerEmail')->nullable(false);
            $table->string('ManufacturerPhoneNo')->nullable(true);
            $table->string('ManufacturerAddress')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
