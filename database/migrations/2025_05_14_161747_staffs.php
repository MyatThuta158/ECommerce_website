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
        Schema::create('Staffs',function(Blueprint $table){
            $table->increments('staffid')->unique();
            $table->string('StaffName')->nullable(false);
            $table->string('StaffEmail')->nullable(false);
            $table->text('StaffPassword')->nullable(false);
            $table->string('StaffPhoneNo')->nullable(true);
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
