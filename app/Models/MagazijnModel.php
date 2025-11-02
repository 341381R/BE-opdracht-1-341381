<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MagazijnModel extends Model
{
    public function SP_GetAllProducts()
    {
        // var_dump(DB::select('CALL SP_GetAllAllergenen'));
        return DB::select('CALL SP_GetAllProducts');
    }

    public function SP_GetAllergenenInfoProductById($id)
    {
        return DB::select(
            'CALL SP_GetAllergenenInfoProductById(:id)',
            ['id' => $id]
        );
    }
}
