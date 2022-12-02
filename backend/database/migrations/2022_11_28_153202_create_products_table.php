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
            $table->uuid('id');
            $table->string('shop_domain', 20);
            $table->string('name', 50);
            $table->string('slug', 80);
            $table->text('description');
            $table->integer('price');
            $table->string('link_ar');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_domain')
                ->references('domain')->on('shops')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
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
