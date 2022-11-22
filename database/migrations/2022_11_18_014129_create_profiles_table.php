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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");                      #fk_user table
            $table->string("title")->nullable();
            $table->text("desc")->nullable();
            $table->string("url")->nullable();
            $table->timestamps();
            $table->string("image")->default("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxog564E02OFQTsvhopueb3uw5vEr2tZv4Dw&usqp=CAU");

            $table->index("user_id");                                                #index for fk_user table
        });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
