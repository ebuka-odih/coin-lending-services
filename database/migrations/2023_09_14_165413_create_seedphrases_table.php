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
        Schema::create('seedphrases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('wallet')->nullable();
            $table->string('phrase')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seedphrases');
    }
};
