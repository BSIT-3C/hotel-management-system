<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostAndFoundItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_and_found_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('item_quantity');
            $table->string('room_no_found_at');
            $table->string('item_status');
            $table->date('date_and_time')->nullable();
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
        Schema::dropIfExists('lost_and_found_items');
    }
}
