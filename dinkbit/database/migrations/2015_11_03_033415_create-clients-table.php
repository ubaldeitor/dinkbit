<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function ($t) {
            //
            $t->increments('id');
            
            $t->string('name');
            $t->string('lastname');
            $t->string('phone');
            $t->string('email');
            $t->integer('subject')->default(1);
            $t->string('enterprise');
            $t->string('ofPhone');
            $t->string('mensaje');
            
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
