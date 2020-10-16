<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AtenuanteAgravanteImport;

class CreateAgravanteAtenuanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agravante_atenuante', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo',['AGRAVANTE','ATENUANTE']);
            $table->text('descripcion');
            $table->timestamps();
        });
        Excel::import(new AtenuanteAgravanteImport, public_path('/imports/agravantes_atenuantes.xlsx'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agravante_atenuante');
    }
}
