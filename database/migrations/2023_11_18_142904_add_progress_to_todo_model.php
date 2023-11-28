<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgressToTodoModel extends Migration
{
    public function up()
    {
        Schema::table('todo', function ($collection) {
            $collection->integer('progress')->default(0);
        });
    }

    public function down()
    {
        Schema::table('todo', function ($collection) {
            $collection->dropColumn('progress');
        });
    }
};
