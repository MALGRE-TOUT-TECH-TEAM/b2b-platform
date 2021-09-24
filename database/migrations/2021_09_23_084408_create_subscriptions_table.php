<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('subscriptions', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("name", 150);
            $table->decimal("price", 10, 2);
            $table->enum("term", ["yearly", "quarterly", "monthly"]);
            $table->longText("points");
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
        Schema::dropIfExists('subscriptions');
    }
}
