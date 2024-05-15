<?php

use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->decimal('total_price', 10, 2);
            $table->string('payment_method', 45)->nullable();
            $table->enum('payment_status', PaymentStatus::values())->default(PaymentStatus::DEFAULT);
            $table->string('order_id');
            $table->enum('order_status', OrderStatus::values())->default(OrderStatus::DEFAULT);
            $table->string('tracking_no', 2000);
            $table->decimal('shipping', 10, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
