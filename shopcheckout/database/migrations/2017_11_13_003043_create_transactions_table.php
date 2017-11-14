<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('product_qty');
            $table->boolean('paid')->default(0);
            $table->boolean('special')->default(0);
            $table->dateTime('paid_time');
            $table->char('status',10);
            $table->decimal('total_amount',8,2);
            $table->integer('reconciled_id');
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
        Schema::drop('transactions');
    }
}
