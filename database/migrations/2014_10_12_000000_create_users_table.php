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
            $table->string('firstname', 100)->nullable()->update();
            $table->string('surname', 100)->nullable()->update();
            $table->string('email', 191)->unique();
            $table->string('photo', 50)->nullable()->update();
            $table->timestamp('email_verified_at')->nullable()->update();
            $table->string('password', 191);
            $table->date('birthdate')->nullable()->update();
            $table->rememberToken();
            $table->string('telephone', 20)->nullable()->update();
            $table->string('gender', 20)->nullable()->update();
            $table->tinyInteger('is_active')->default(1)->update();
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
