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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('phone')->nullable();
            $table->string('link')->nullable();

            $table->integer('count_create')->default(1);

            $table->boolean('is_processed')->default(false);
            $table->boolean('isQualityLead')->default(false);
            $table->boolean('is_express_delivery')->default(false);
            $table->boolean('is_add_sale')->default(false);

            $table->foreignId('source_id')->constrained()->cascadeOnDelete();

            $table->foreignId('unit_id')->constrained()->cascadeOnDelete();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('status_id')->constrained()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
