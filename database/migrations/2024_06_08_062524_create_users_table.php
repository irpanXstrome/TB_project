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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->char('name',64);
            $table->char('username',64);
            $table->string('password');

            $table->integer('role')->default(0); // 0 Customer : 1 "Operator" : 2 "Admin"
            $table->char('address')->nullable();
            $table->char('number',32)->nullable();
            $table->enum('gender',[0,1,2])->default(0); // 1 "male" : 2 "female" : 0 "-"
//            a user_id	nama	alamat	no_telepon	jenis_kelamin	password	role
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
