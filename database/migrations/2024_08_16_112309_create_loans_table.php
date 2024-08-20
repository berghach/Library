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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->dateTime('loan_date');
            $table->dateTime('return_date');
            $table->time('duration');
            $table->boolean('is_returned')->default(false);
            $table->float('late_fees')->default(0);
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users', 'id', 'loan_user_id');
            $table->foreignId('book_id')->constrained('books', 'id', 'loan_book_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
