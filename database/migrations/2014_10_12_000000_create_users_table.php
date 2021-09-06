<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);
            $table->string('surname', 100);
            $table->string('email', 191)->unique()->update();
            $table->string('photo', 50)->update();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191);
            $table->date('birthdate');
            $table->rememberToken();
            $table->string('telephone', 20);
            $table->string('gender', 20);
            $table->tinyInteger('is_active');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
