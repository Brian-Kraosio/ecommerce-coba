<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignUuid('_lft')->nullable()->change();
            $table->foreignUuid('_rgt')->nullable()->change();
            $table->foreignUuid('parent_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedInteger('_lft')->default(0)->change();
            $table->unsignedInteger('_rgt')->default(0)->change();
            $table->unsignedInteger('parent_id')->nullable()->change();
        });
    }
}
