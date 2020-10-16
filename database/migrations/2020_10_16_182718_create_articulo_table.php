<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ArticulosImport;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->text("descripcion");
            $table->unsignedBigInteger('delito_id');
            $table->foreign('delito_id')->references('id')->on('delito');
            $table->timestamps();
        });
        Excel::import(new ArticulosImport, public_path('/imports/tabla_articulos.xlsx'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
