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
        Schema::create('nfts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('author_id')->constrained('users');
        $table->string('img');
        $table->string('title');
        $table->text('description');
        $table->unsignedBigInteger('price');
        $table->unsignedBigInteger('royalty');
        $table->foreignId('collection_id')->constrained('collections');
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
};
