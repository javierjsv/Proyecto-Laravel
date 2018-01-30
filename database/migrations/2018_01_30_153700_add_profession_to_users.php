<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessionToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users' , function (Blueprint $table){

            $table->string('profession',50)->nullable()->after('password');
        });




        // Schema::table('users', (Blueprint $table)) {
        //       $table->string('profession', 50)->nullable();
        // });
    }



    // inciar migration
    // php artisan migrate
    // revertir migracion 
    // php artisan migrate:reset 
    // refrescar migracion 
    // php artisan migrate:refresh
    // devolver lotes
    // php artisan migrate:rollback



    /**
     * Reverse the migrations esto elimina la tabla si ya esta creada
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table){
          $table->dropColum('profession');
        });



      // Schema::table('users', function (Blueprint $table) {
      //    $table->dropColumn('profession');
      //   });
    }
}
