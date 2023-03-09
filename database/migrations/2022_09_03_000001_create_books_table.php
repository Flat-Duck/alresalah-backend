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
            $table->string('cover_image')->nullable();
            $table->string('title')->nullable();
            $table->string('ISBN')->nullable();
            $table->string('edition')->nullable();
            $table->string('format')->default('Paperback');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->string('Author')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('price')->default(0.0);
            $table->decimal('sale_price')->default(0.0);
            $table->text('description')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('on_sale')->default(false);
            $table->unsignedBigInteger('publisher_id')->nullable();

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
