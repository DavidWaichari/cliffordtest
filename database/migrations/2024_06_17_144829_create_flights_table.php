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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->unsignedBigInteger('destination_class_id')->nullable();
            $table->unsignedBigInteger('airline_id')->nullable();
            $table->string('flight_type')->nullable();
            $table->integer('no_of_passengers')->nullable();
            $table->decimal('current_price', 10, 2)->nullable();
            $table->timestamp('departure')->nullable();
            $table->timestamp('arrival')->nullable();
            $table->string('status')->nullable();
            $table->text('extras')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
