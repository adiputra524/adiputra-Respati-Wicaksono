<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('transaction_table', function (Blueprint $table) {
           // $table->increments('transaction_id');
            $table->unsignedInteger('id_user')->change();
            $table->foreign('id_user')->references('user_id')->on('users')->change();

            // $table->rememberToken();
            // $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
