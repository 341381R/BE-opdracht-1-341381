<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeveringModel extends Model
{
    public function SP_GetAllLeveringen($beginDatum, $eindDatum)
    {
        return DB::select(
            'CALL SP_GetAllLeveringen(:beginDatum, :eindDatum)',
            [
                'beginDatum' => $beginDatum,
                'eindDatum' => $eindDatum
            ]
        );
    }
}
