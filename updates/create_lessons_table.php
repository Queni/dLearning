<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_lessons', function(Blueprint $table) {
            Schema::dropIfExists('queni_dlearning_lessons');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('content');
            $table->integer('course_id')->unsigned();

            $table->foreign('course_id')
                    ->references('id')->on('queni_dlearning_courses')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_lessons');
    }
}
