<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50);
            $table->unsignedinteger('brand');
            $table->string('description');
            $table->enum('unit_measure',['UNIT', 'OTHER']);
            $table->boolean('available');
            $table->decimal('vat_percentage',4,2);
            $table->decimal('unit_price',20,2);
            $table->unsignedinteger('stock');
            $table->foreignId('id_category')->constrained('categories')->onDelete('cascade'); 
            $table->foreignId('id_brand')->references('id')->on('brands');
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
        Schema::dropIfExists('products');
    }
};
