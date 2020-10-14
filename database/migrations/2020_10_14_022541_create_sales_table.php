<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->foreignId('cajero_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('bodeguero_id')->constrained('users')->onDelete('cascade');
            $table->datetime('fecha_hora');
            $table->unsignedInteger('valor_neto');
            $table->enum('estado', ['cola','entrega ']);
            $table->datetime('fecha_entrega');
            $table->unsignedInteger('iva');
            $table->unsignedInteger('valor_total');
            $table->softDeletes();
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
        Schema::dropIfExists('sales');
    }
}
