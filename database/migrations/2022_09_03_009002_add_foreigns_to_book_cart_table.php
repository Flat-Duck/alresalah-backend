<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToBookCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_cart', function (Blueprint $table) {
            $table
                ->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('cart_id')
                ->references('id')
                ->on('carts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_cart', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['cart_id']);
        });
    }
}
