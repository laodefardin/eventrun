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
        Schema::create('registrations', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
            $table->string('participant_name');
            $table->string('email');
            $table->string('phone_number');
            $table->bigInteger('total_price');
            $table->date('registration_date')->default(now());
            $table->enum('payment_status', ['Paid', 'Unpaid'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
