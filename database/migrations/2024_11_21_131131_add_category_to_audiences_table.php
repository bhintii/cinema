<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryToAudiencesTable extends Migration
{
    public function up()
    {
        Schema::table('audiences', function (Blueprint $table) {
            $table->string('category')->nullable();
        });
    }

    public function down()
    {
        Schema::table('audiences', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
}