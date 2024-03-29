<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phonebooks', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->timestamps();
            $table->string('firstname')->nullable(false);
            $table->string('lastname')->nullable(false);
            $table->string('number')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phonebooks');
    }
};
