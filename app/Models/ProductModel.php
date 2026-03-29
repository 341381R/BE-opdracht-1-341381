<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public function SP_GetAllProductsByDate($beginDatum, $eindDatum)
    {
        return DB::select(
            'CALL SP_GetAllProductsByDate(:beginDatum, :eindDatum)',
            [
                'beginDatum' => $beginDatum,
                'eindDatum' => $eindDatum
            ]
        );
    }
}
