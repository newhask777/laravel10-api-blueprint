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
        Schema::create('permission_menu', function (Blueprint $table) {
            //
//            $table->integer('permission_id')->unsigned();
            $table->foreignId('permission_id')->constrained()->cascadeOnDelete();

//            $table->bigInteger('menu_id')->unsigned();
            $table->foreignId('menu_id')->constrained()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
