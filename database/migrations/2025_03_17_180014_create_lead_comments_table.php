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
        Schema::create('lead_comments', function (Blueprint $table) {
            $table->id();

            $table->text('text');

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->foreignId('lead_id')->constrained()->cascadeOnDelete();

            $table->foreignId('status_id')->constrained()->cascadeOnDelete();

            $table->text('comment_value')->nullable();

            $table->boolean('is_event')->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_comments');
    }
};
