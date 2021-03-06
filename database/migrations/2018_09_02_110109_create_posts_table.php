

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
          $table->mediumText('body');
    	$table->integer('user_id')->unsigned();
    	$table->integer('category_id')->unsigned();
		  $table->string('url');

$table->foreign('category_id')->references('id')->on('categories');
  $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('posts');
    }
}
