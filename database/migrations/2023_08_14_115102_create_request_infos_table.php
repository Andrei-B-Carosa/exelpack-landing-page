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
        Schema::create('request_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('rq_id');
            $table->string('requestor_name');
            $table->string('requestor_email');
            $table->string('requestor_telephone');
            $table->string('requestor_company');
            $table->longText('requestor_message')->nullable();
            $table->string('company_accreditation',50);
            $table->longText('company_address')->nullable();
            $table->integer('delivery_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_infos');
    }
};
