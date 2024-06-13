<?php

use App\Models\Customers;
use App\Models\Operator;
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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id('incident_id');
//            no_insiden	no_sl	id_pegawai	insiden	tanggal	status	tindakan
            $table->foreignId('no_sl');
            $table->foreignId('operator_id')->nullable();
            $table->string('descriptions');
            $table->string('action')->nullable();
            $table->enum('status',[0,1,2])->default(0); // 0 'pending' : 1 'process' : 2 'Ended'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
