<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarPricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_pricing', function (Blueprint $table) {
            $table->foreignId('car_id')->constrained('cars', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('in_houre');
            $table->string('in_day');
            $table->string('in_month');
            $table->primary('car_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_pricing');
    }
}
