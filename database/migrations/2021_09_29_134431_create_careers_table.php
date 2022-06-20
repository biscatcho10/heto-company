<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("phone");
            $table->string("email");
            $table->boolean("seen")->default(0);
            $table->unsignedBigInteger("job_id")->nullable();
            $table->unsignedBigInteger("upload_id")->comment('This is an upload id for the cv file');
            $table->integer("position")->nullable();
            $table->foreign("job_id")->references("id")->on("jobs")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("upload_id")->references("id")->on("uploads")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
