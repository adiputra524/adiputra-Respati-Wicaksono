<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateItemDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_table_detail', function (Blueprint $table) {
            // $table->('name', 50)->change();


            //  $table->integer('price')->change();
            //  $table->integer('discount')->change();
            //  $table->integer('stock')->change();
          // $table->unsignedInteger('brand_id')->nullable()->change();
           // $table->string('picture')->nullable();

        });
    }

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
