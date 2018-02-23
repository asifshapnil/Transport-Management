<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTotalseatToBus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

      public function up()
      {
        Schema::table('buses', function($table){
          $table->integer('totalseat');
        });
      }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('buses', function($table){
        dropColumn('totalseat');

  });
    }
}
