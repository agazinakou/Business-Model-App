<?php

use Bow\Database\Migration\Schema;
use Bow\Database\Migration\Migration;
use Bow\Database\Migration\TablePrinter as Printer;

class CreateUsersTable extends Migration
{
    /**
     * create Table
     */
    public function up()
    {
        Schema::create("users", function (Printer $table) {
            $table->increment('id');
            $table->string('name');
            $table->string('username',191)->unique();
            $table->string('email',191)->unique();
            $table->string('password');
            $table->string('remember_token');
            $table->engine('InnoDB');
            $table->timestamps();
        });
    }

    /**
     * Drop Table
     */
    public function down()
    {
        Schema::drop("users");
    }
}
