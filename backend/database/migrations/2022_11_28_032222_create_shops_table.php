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
        Schema::create('shops', function (Blueprint $table) {
            $table->string('domain', 20)->primary();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('picture');
            $table->string('name', 30);
            $table->text('description');
            $table->enum('status', ['0', '1', '2'])->default('0')
                ->comment('
                    // 0 for non active
                    // 1 for active shops
                    // 2 for maintenance');
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
        Schema::dropIfExists('shops');
    }
};
