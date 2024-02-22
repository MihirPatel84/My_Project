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
        Schema::create('stripe_history', function (Blueprint $table) {
            $table->id();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('email')->nullable();
            $table->text('amount')->nullable();
            $table->text('currency_code')->nullable();
            $table->text('stripe_card_id')->nullable();
            $table->text('card_last_four')->nullable();
            $table->text('card_type')->nullable();
            $table->text('stripe_charge_id')->nullable();
            $table->text('stripe_response')->nullable();
            $table->text('received_date')->nullable();
            $table->text('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stripe_history');
    }
};
