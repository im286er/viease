<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowReplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
            $table->string('follow')->nullable()->comment('关注时回复');
            $table->string('default')->nullable()->comment('自动回复');
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
        Schema::drop('follow_replies');
    }
}
