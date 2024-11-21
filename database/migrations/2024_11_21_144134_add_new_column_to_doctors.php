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
        Schema::table('doctors', function (Blueprint $table) {
            $table->text('short_description')->nullable();
            $table->text('experience')->nullable();
            $table->text('education')->nullable();
            $table->text('languages')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('short_description');
            $table->dropColumn('experience');
            $table->dropColumn('education');
            $table->dropColumn('languages');
        });
    }
};
