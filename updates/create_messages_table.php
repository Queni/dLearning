<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_messages', function(Blueprint $table) {
            Schema::dropIfExists('queni_dlearning_messages');
            $table->engine = 'InnoDB';
            $table->integer('sender_id')->unsigned();
            $table->integer('reciever_id')->unsigned();
            $table->text('massage');
            $table->boolean('is_read');
            $table->timestamps();

            $table->primary(['sender_id', 'reciever_id']);

            $table->foreign('sender_id')
                    ->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('reciever_id')
                    ->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_messages');
    }
}
