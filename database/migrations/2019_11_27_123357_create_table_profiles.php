<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('income', 10,2)->nullable();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('cpf');
          $table->dropColumn('address');
          $table->dropColumn('city');
          $table->dropColumn('state');
          $table->dropcolumn('phone');
          $table->dropcolumn('income');
          $table->dropcolumn('google_id');
          $table->dropcolumn('facebook_id');
      });
    }
}
