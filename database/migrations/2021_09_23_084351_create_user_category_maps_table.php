<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCategoryMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_category_maps', function (Blueprint $table) {
            // $table->foreignId("user_id")->constrained("users")->onUpdate("cascade")->onDelete("cascade");
            // $table->foreignId("category_id")->constrained("categories");
            $table->uuid("user_id");
            $table->foreign("user_id")->references("id")->on("users");

            $table->uuid("category_id");
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("user_category_maps", function (Blueprint $table) {
            $table->dropForeign('user_category_maps_category_id_foreign');
        });
        Schema::dropIfExists('user_category_maps');
    }
}
