<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cover_image');
            $table->string('title');
            $table->string('ISBN');
            $table->string('edition');
            $table->string('format');
            $table->unsignedBigInteger('level_id');
            $table->string('Author');
            $table->integer('quantity');
            $table->decimal('price');
            $table->decimal('sale_price');
            $table->text('description');
            $table->boolean('featured');
            $table->boolean('on_sale');
            $table->unsignedBigInteger('publisher_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
