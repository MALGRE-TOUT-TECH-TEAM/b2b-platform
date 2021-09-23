<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('audiences', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("eng_name", 150);
            $table->string("dan_name", 150);
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
    }
}
