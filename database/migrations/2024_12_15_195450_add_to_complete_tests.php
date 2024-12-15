<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('complete_tests', function (Blueprint $table) {
            $table->integer('correct')->default(0);
            $table->integer('incorrect')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complete_tests', function (Blueprint $table) {
            //
        });
    }
};
