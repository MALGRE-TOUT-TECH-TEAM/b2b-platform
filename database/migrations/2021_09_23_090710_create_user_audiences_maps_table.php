<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAudiencesMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates a mapping table, consisting of id's from two different tables.
        Schema::create('user_audience_maps', function (Blueprint $table) {
            // $table->foreignId("user_id")->constrained("users")->onUpdate("cascade")->onDelete("cascade");
            // $table->foreignId("audience_id")->constrained("audiences");

            $table->uuid("user_id");
            $table->foreign("user_id")->references("id")->on("users");

            $table->uuid("audience_id");
            $table->foreign("audience_id")->references("id")->on("audiences");
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
        Schema::dropIfExists('user_audience_maps');
        Schema::dropIfExists('audiences');
    }
}
