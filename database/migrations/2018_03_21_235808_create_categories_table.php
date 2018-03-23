<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('url');   
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['name' => 'santiago_airport', 'title' => 'Aeropuerto de Santiago', 'description' => 'Aeropuerto Arturo Merino Benitez', 'url' => 'IMG_20180113_025808.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'rio', 'title' => 'Rio de Janeiro', 'description' => 'São Sebastião do Rio de Janeiro', 'url' => 'IMG_20180114_122254.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'aquario', 'title' => 'AquaRio', 'description' => 'AquaRio Porto Maravilha', 'url' => 'IMG_20180114_135205.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ilha_grande', 'title' => 'Ilha Grande', 'description' => 'Ilha Grande, Angra do Reis, RJ', 'url' => 'IMG_20180117_084051.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'buzios', 'title' => 'Buzios', 'description' => 'Armação dos Búzios, RJ', 'url' => 'IMG_20180118_132847.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'corcovado', 'title' => 'Cerro del Corcovado', 'description' => 'Cerro del Corcovado', 'url' => 'IMG_20180119_103040.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pan_de_azucar', 'title' => 'Pão de Açúcar', 'description' => 'Pão de Açúcar', 'url' => 'IMG_20180119_151115.jpg', 'created_at' => now(), 'updated_at' => now()]            
        ]);
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
