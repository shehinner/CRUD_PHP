<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentails', function (Blueprint $table) {
            $table->increments('id');
            $table->date('star_date');
            $table->date('end_date');
            $table->integer('total');
            $table->integer('user_id')->unsigned();
            $table->integer('status_id')->unsigned();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentails');
    }
}
