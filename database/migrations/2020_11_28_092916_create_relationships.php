<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) 
        {
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade');
        });

        Schema::table('movies', function ($table) 
        {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        Schema::table('categories', function ($table) 
        {
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        Schema::table('category_movie', function ($table) 
        {
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        Schema::table('movie_rental', function ($table) 
        {
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade');
            $table->foreign('rental_id')->references('id')->on('rentails')->onUpdate('cascade');
            
        });

        Schema::table('rentails', function ($table) 
        {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            
        });

        Schema::table('roles', function ($table) 
        {
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        Schema::table('statuses', function ($table) 
        {
            $table->foreign('type_status_id')->references('id')->on('type_statuses')->onUpdate('cascade');
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
