<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('img')->comment('main image');
            $table->longText('other_img')->comment('carousel');
            $table->boolean('product_type')->comment('1=carton, 2=foam, 3=bubble_sheet,4=danpla,5=others');
            $table->longText('specification');
            $table->boolean('status')->comment('0=hide, 1=display');
            $table->string('customize');
            $table->integer('company')->comment('1=exelpack');
            $table->integer('last_modified_by');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
