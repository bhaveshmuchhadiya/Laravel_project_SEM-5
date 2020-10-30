<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->string('department');
            $table->date('birthdate');
            $table->string('address');
            $table->string('city');
            $table->string('email');
            $table->integer('mobile');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('manage_employees');
    }
}
