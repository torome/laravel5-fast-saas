<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($table) {

            $table->string('id', 36)->unique();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('username', 16);
            $table->string('password', 255);
            $table->string('email', 75)->unique();
            $table->string('locale', 5)->default('en_US');
            $table->string('timezone', 20)->default('UTC');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by_user_id', 36);
            $table->string('updated_by_user_id', 36);
            $table->string('deleted_by_user_id', 36);
            $table->string('status', 8)->default("INACTIVE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }

}