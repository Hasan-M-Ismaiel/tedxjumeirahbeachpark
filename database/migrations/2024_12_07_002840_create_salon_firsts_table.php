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
        Schema::create('salon_firsts', function (Blueprint $table) {

            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');

            $table->string('country');
            
            $table->string('city');

            $table->date('birthday');

            $table->string('education');
            $table->string('work');
            $table->string('industry');
            $table->string('interests');

            $table->string('why');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_firsts');
    }
};
