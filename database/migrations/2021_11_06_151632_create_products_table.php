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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('content');
            $table->integer('orgin_price');
            $table->integer('sale_price');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->json('option');
            $table->integer('view_count')->default(0);
            $table->integer('sale_count')->default(0);
            $table->integer('review_count')->default(0);
            $table->json('info');
            $table->integer('user_created_id');
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
