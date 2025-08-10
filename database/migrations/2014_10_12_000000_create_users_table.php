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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nomcomplet');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('profession')->nullable();;
            $table->string('pays')->nullable();;
            $table->string('cv')->nullable();
            $table->text('adresse')->nullable();;
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
