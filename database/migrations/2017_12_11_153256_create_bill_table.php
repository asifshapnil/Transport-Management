<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('bills', function(Blueprint $table){
        $table->increments('id');
        $table->integer('bus_id');
        $table->string('date');
        $table->string('fuel');
        $table->string('fine');
        $table->string('repair');
        $table->string('staffbill');


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
      Schema::dropIfExists('bills');

    }
}
