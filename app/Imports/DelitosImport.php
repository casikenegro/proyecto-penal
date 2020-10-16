<?php

namespace App\Imports;

use App\Models\Delito;
use Maatwebsite\Excel\Concerns\ToModel;

class DelitosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Delito([
           'nombre'=>$row[0],
           'min'=>$row[1],
           'max'=>$row[2]
        ]);
    }
}
