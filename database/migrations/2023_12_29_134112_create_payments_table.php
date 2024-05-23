<?php

use App\Enums\PaymentMethod;
use App\Models\Order;
use App\Models\User;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Order::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->enum('payment_method', PaymentMethod::values());
            $table->string('message')->nullable();
            $table->string('paymentId')->nullable();
            $table->string('status')->nullable();
            $table->string('channel')->nullable();
            $table->string('domain')->nullable();
            $table->string('gateway_response')->nullable();
            $table->string('reference')->nullable();
            $table->string('currency');
            $table->string('ip_address');
            $table->bigInteger('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
