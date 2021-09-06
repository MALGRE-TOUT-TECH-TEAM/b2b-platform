<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesAndPermissionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string("name", 191);
            $table->string("guard_name", 191);
            $table->timestamps();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string("name", 191);
            $table->string("guard_name", 191);
            $table->timestamps();
        });

        Schema::create('model_has_permissions', function (Blueprint $table) {
            $table->foreignId("permission_id")->constrained("permissions");
            $table->string("model_type", 191);
            $table->bigIncrements("model_id");
        });

        Schema::create('role_has_permissions', function (Blueprint $table) {
            $table->foreignId("permission_id")->constrained("permissions");
            $table->foreignId("role_id")->constrained("roles");
        });

        Schema::create('model_has_roles', function (Blueprint $table) {
            $table->foreignId("role_id")->constrained("roles");
            $table->string("model_type", 191);
            $table->bigIncrements("model_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_has_roles');
        Schema::dropIfExists('role_has_permissions');
        Schema::dropIfExists('model_has_permissions');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
    }
}
