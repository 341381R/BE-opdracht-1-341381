<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function SP_GetProductById($id)
    {
        return DB::selectOne(
            'CALL SP_GetProductById(:id)',
            ['id' => $id]
        );
    }

    public function SP_DeleteProduct($id)
    {
    
        $result = DB::selectOne('CALL SP_DeleteProduct(:id)', [
            'id' => $id
        ]);

        return $result->affected ?? null;
    }
}
