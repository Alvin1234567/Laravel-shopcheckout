<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price',8,2);
            $table->char('currency',5);
            $table->boolean('special_offer');
            $table->string('special_offer_formula');
            $table->string('special_offer_description',200);
            $table->boolean('hiden')->default(0);
            $table->timestamps('');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('products');
    }
}
