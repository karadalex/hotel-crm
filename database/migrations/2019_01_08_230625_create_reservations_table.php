<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->integer('reservation_id');
            $table->primary('reservation_id');
            $table->integer('room_category_id');
            $table->integer('invoice_id');
            $table->integer('customer_id');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->integer('num_adults');
            $table->integer('num_children');
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
        Schema::dropIfExists('reservations');
    }
}
