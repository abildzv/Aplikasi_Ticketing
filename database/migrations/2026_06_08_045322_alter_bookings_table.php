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
        Schema::table('bookings', function (Blueprint $table) {

        $table->unsignedBigInteger('movie_id')
              ->nullable()
              ->after('user_id');

        $table->text('seats')
              ->nullable()
              ->after('movie_id');

        $table->string('payment_method')
              ->nullable();

        $table->string('status')
              ->default('pending');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {

        $table->dropColumn([
            'movie_id',
            'seats',
            'payment_method',
            'status'
        ]);
    });
    }
};
