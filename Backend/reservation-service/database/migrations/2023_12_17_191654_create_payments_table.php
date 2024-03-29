<?php

declare(strict_types=1);

use App\Enums\PaymentStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->decimal('amount', 10, 2);
            $table->date('payment_date');
            $table->enum('status', PaymentStatus::getValues())->default(PaymentStatus::PENDING);
            $table->timestamps();

            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
