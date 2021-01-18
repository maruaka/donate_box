<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_name');
            $table->text('title');
            $table->text('subtitle');
            $table->text('text_one');
            $table->text('text_twe');
            $table->text('text_three');
            $table->string("file_name_one");
			$table->string("file_path_one");
			$table->string("file_name_twe");
			$table->string("file_path_twe");
			$table->string("file_name_three");
			$table->string("file_path_three");
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
        Schema::dropIfExists('blogs');
    }
}
