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
        Schema::create('request_status_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('rq_id');
            $table->boolean('previous_status_id')->nullable()->comment('0=denied 1=completed 2=pending 3=processing');
            $table->boolean('new_status_id')->nullable()->comment('0=denied 1=completed 2=pending 3=processing');
            $table->integer('processed_by')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_status_logs');
    }
};
