<?php

use App\Models\CustomerBillRecording;
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
        Schema::create('customer_payment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId( 'record_id');
            $table->integer('paid_total');
            $table->string('counter');
//            bulan	catatan_id	dibayar	loket

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_payment_histories');
    }
};
