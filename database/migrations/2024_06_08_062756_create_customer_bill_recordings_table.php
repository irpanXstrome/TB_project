<?php

use App\Models\Customers;
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
        Schema::create('customer_bill_recordings', function (Blueprint $table) {
            $table->id('record_id');
//            catatan_id	no_sl	pemakaian	biaya_air	biaya_beban	denda
            $table->foreignId('no_sl');
            $table->integer('usage')->default(0);
            $table->integer('water_costs')->default(0);
            $table->integer('load_costs')->default(0);
            $table->integer('fine')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_bill_recordings');
    }
};
