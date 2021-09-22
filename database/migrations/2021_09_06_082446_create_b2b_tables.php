<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateB2bTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates a new DB table called "advertisements"
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string("title", 150);
            $table->date("start_date");
            $table->date("end_date");
            $table->enum("type", ["vertical", "horizontal"]);
            $table->string("url", 191);
            $table->enum("status", ["publish", "draft"]);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('audiences', function (Blueprint $table) {
            $table->id();
            $table->string("eng_name", 150);
            $table->string("dan_name", 150);
            $table->enum("status", ["publish", "draft"]);
            $table->timestamps();
            $table->softDeletes();
        });

        // Creates a mapping table, consisting of id's from two different tables.
        Schema::create('user_audience_maps', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained("users")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("audience_id")->constrained("audiences");
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("eng_name", 150);
            $table->string("dan_name", 150);
            $table->enum("status", ["publish", "draft"]);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('user_category_maps', function (Blueprint $table) {
            $table->foreignId("user_id")->constrained("users")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("category_id")->constrained("categories");
        });

        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string("name", 150);
            $table->decimal("price", 10, 2);
            $table->enum("term", ["yearly", "quarterly", "monthly"]);
            $table->longText("points");
            $table->enum("status", ["publish", "draft"]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Have to specifically drop the foreign key before dropping the whole table, to abandon any existing relations. 
        Schema::table("user_audience_maps", function (Blueprint $table) {
            $table->dropForeign('user_audience_maps_audience_id_foreign');
        });
        Schema::table("user_category_maps", function (Blueprint $table) {
            $table->dropForeign('user_category_maps_category_id_foreign');
        });
        Schema::dropIfExists('advertisements');
        Schema::dropIfExists('audiences');
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('user_audience_maps');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('user_category_maps');
        Schema::dropIfExists('advertisements');
    }
}
