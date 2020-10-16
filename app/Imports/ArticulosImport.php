<?php

namespace App\Imports;

use App\Models\Articulo;
use Maatwebsite\Excel\Concerns\ToModel;

class ArticulosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Articulo([
            'codigo'=>$row[0],
            'descripcion'=>$row[1],
            'delito_id'=>$row[2]            
        ]);
    }
}
