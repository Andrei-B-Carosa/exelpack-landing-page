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
        Schema::create('request_escalated', function (Blueprint $table) {
            $table->id();
            $table->integer('rq_id');
            $table->integer('cs_id')->comment('customer_service');
            $table->integer('mg_id')->comment('manager');
            $table->longText('reason')->nullable();
            $table->longText('remarks')->nullable();
            $table->boolean('status')->nullable()->comment('null=pending, 0=denied, 1=accepted');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_escalated');
    }
};
