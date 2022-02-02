<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('total', 10, 2)->nullable();
            $table->dateTime('data_venda')->nullable();
            $table->string('quant', 100)->nullable();
            $table->integer('cliente_id')->nullable()->unsigned();
                       $table->foreign('cliente_id')
                               ->references('id')
                               ->on('clientes')
                               ->onUpdate('cascade')
                               ->onDelete('cascade');
            
                       $table->integer('produto_id')->nullable()->unsigned();
                       $table->foreign('produto_id')
                               ->references('id')
                               ->on('produtos')
                               ->onUpdate('cascade')
                               ->onDelete('cascade');
            $table->timestamps();
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
