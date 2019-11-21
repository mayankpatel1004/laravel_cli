<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WishlistTable extends Migration
{
    public function up() {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('wishlists');
    }
}