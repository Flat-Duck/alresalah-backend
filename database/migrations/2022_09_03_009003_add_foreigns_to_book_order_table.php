<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToBookOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_order', function (Blueprint $table) {
            $table
                ->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('order_id')
                ->references('id')
                ->on('orders')
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
        Schema::table('book_order', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['order_id']);
        });
    }
}
