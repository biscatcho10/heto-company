<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50);
            $table->text("description");
            $table->longText("case_study")->nullable();
            $table->text("location");
            $table->longText("gallery")->nullable()->comment("Array of uploads ids");
            $table->unsignedBigInteger("thumbnail_image");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("project_type_id");
            $table->integer("position")->nullable();
            $table->foreign("thumbnail_image")->references("id")->on("uploads")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("project_type_id")->references("id")->on("project_types")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('projects');
    }
}
