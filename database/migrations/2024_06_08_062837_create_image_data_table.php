<?php

use App\Models\CustomerBillRecording;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('image_data', function (Blueprint $table) {
            $table->id();
//            id_foto	catatan_id	data_foto
            $table->foreignId('record_id');
            $table->longText('image_data')->charset('binary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_data');
    }
};
