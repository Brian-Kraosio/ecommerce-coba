<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('categories_id')->constrained();
            $table->foreignUuid('shop_id')->constrained();
            $table->foreignUuid('type_id')->constrained('product_types');
            $table->string('slug');
            $table->string('name');
            $table->decimal('price' , 13, 7);
            $table->integer('quantity');
            $table->integer('views');
            $table->decimal('discount_price', 13, 7)->default(0);
            $table->boolean('discount')->default(false);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('products');
    }
}
