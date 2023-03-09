<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table
                ->foreign('level_id')
                ->references('id')
                ->on('levels')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('publisher_id')
                ->references('id')
                ->on('publishers')
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
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
            $table->dropForeign(['publisher_id']);
        });
    }
}
