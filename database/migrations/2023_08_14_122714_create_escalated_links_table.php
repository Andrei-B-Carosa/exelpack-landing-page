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
        Schema::create('escalated_links', function (Blueprint $table) {
            $table->id();
            $table->integer('re_id')->comment("request_escalated_id");
            $table->string('unique_link')->comment("active for 6 hours");;
            $table->boolean('status')->comment("0=inactive, 1=active");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escalated_links');
    }
};
