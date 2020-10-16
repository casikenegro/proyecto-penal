<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DelitosImport;
use App\Models\Delito;


class CreateDelitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delito', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->integer("min");
            $table->integer("max");
            $table->timestamps();
        });
        Excel::import(new DelitosImport, public_path('/imports/delitos.xlsx'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delito');
    }
}
