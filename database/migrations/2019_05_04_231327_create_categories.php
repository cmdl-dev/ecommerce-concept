<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('title',200);
            $table->string('value',200);
            $table->timestamps();
        });
        // DB::statement('
        //     CREATE TABLE categories(
        //         title VARCHAR(200) NOT NULL,
        //         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //         updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        //         )
        // ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
