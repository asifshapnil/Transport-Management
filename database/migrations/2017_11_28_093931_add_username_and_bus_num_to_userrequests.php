<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameAndBusNumToUserrequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('userrequests', function($table){
        $table->string('username');
        $table->string('bus_num');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('userrequests', function($table){
        dropColumn('username');
        dropColumn('bus_num');


      });
    }
}
