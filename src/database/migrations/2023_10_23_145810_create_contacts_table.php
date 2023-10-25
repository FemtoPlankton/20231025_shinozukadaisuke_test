<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name-first',255)->nullable(false);
            $table->string('name-last')->nullable(false);
            $table->tinyInteger('gender');
            $table->string('mail',255)->nullable(false);
            $table->char('post', 8)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('building', 255)->nullable(true);
            $table->text('opinion')->nullable(false);
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
        Schema::dropIfExists('contacts');
    }
}
