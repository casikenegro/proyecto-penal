<?php

namespace App\Imports;

use App\Models\AtenuanteAgravante;
use Maatwebsite\Excel\Concerns\ToModel;

class AtenuanteAgravanteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AtenuanteAgravante([
            'tipo'=>$row[0],
            'descripcion'=>$row[1]
        ]);
    }
}
