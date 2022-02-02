<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image");
            $table->integer("page");
            $table->float("price");
            $table->unsignedBigInteger("author_id");
            $table->foreign("author_id")->references("id")
                -> on("authors") -> cascadeOnDelete("cascade")
                -> cascadeOnUpdate("cascade");
            $table->string("description") -> nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}