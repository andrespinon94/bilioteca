<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBorrowsBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_borrows_book', function (Blueprint $table) {
            
            $table->increments('id');
            $table->String('date');
            $table->String('hour');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user');

            $table->integer('id_book')->unsigned();
            $table->foreign('id_book')->references('id')->on('book');

            
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
        Schema::dropIfExists('user_borrows_book');
    }
}
