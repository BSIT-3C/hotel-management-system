<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->time('work_start');
            $table->time('work_end');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('gender');
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->string('photo')->nullable();
            // $table->string('position');
            // $table->string('department');
            // $table->string('role');
            $table->timestamp('deleted_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
