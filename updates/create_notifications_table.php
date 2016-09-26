<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_notifications', function(Blueprint $table) {
            Schema::dropIfExists('queni_dlearning_notifications');
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned();
            $table->integer('type')->unsigned();
            $table->text('message');
            $table->boolean('is_read');
            $table->timestamp('created_at');

            $table->primary('user_id');

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_notifications');
    }
}
