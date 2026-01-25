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

    public function SP_GetLeveringInfo($id)
    {
        return DB::select(
            'CALL SP_GetLeveringInfo(:id)',
            ['id' => $id]
        );
    }

    public function SP_CreateLevering($aantal, $datumEerstVolgendeLevering)
    {
        $row = DB::selectOne(
            'CALL SP_CreateLevering(:aantal, :datumEerstVolgendeLevering)',
            [
                'naam' => $naam,
                'omschrijving' => $omschrijving
            ]
        );
        return $row->new_id;
    }

    public function SP_LeverancierDetails($id)
    {
        return DB::selectOne(
            'CALL SP_LeverancierDetails(:id)',
            ['id' => $id]
        ); 
    }

    public function SP_UpdateLeverancier($id, $naam, $contactpersoon, $leveranciernummer, $mobiel, $straat, $huisnummer, $postcode, $stad)
    {
        $row = DB::selectOne(
            'CALL SP_UpdateLeverancier(:id, :naam, :contactpersoon, :leveranciernummer, :mobiel, :straat, :huisnummer, :postcode, :stad)',
            [
                'id' => $id,
                'naam' => $naam,
                'contactpersoon' => $contactpersoon,
                'leverancier' => $leveranciernummer,
                'mobiel' => $mobiel,
                'straat' => $straat,
                'huisnummer' => $huisnummer,
                'postcode' => $postcode,
                'stad' => $stad,
            ]
        );
        return $row->affected ?? 0;
    }
}
