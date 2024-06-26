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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->unsignedInteger('dni')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('role_id')->default(1);
            $table->unsignedInteger('empresa_id')->default(1);
            $table->rememberToken();
            $table->timestamp('last_login', $precision = 0)->nullable();

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
