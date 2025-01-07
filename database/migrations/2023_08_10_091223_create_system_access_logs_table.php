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
        Schema::create('system_access_logs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('ip_address');
            $table->longText('device_details');
            $table->longText('login_details');
            $table->longText('logout_details')->nullable();
            $table->boolean('action')->nullable()->comment('1=login 2=logout');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_access_logs');
    }
};
