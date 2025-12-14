<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeverancierModel extends Model
{
    public function SP_GetAllLeveranciers()
    {
        return DB::select('CALL SP_GetAllLeveranciers');
    }

    public function SP_GetLeveringInfo()
    {
        return DB::selectOne('CALL SP_GetLeveringInfo');
    }
}
