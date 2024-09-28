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
        //
        Schema::create('pending_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('charge_id');
            $table->string('customer_id');
            $table->float('amount',10,2);




           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pending_fees');

    }
};
