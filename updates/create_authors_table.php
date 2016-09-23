<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_authors', function(Blueprint $table) {
            Schema::dropIfExists('queni_dlearning_authors');
            $table->engine = 'InnoDB';
            $table->integer('course_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->primary(['course_id', 'user_id']);

            $table->foreign('course_id')
                    ->references('id')->on('queni_dlearning_courses')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_authors');
    }
}
