<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("title", 150);
            $table->date("start_date");
            $table->date("end_date");
            $table->enum("type", ["vertical", "horizontal"]);
            $table->string("url", 191);
            $table->enum("status", ["publish", "draft"])->default("draft");
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
        Schema::dropIfExists('advertisements');
    }
}
