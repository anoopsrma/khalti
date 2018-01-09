<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhaltisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khaltis', function (Blueprint $table) {
            $table->increments('khalti_id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('mobile');
            $table->decimal('amount', 8, 2);
            $table->string('pre_token');
            $table->string('verified_token');
            $table->string('status');
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
        Schema::dropIfExists('khaltis');
    }
}
