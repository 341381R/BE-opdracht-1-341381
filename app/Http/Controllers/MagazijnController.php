<?php

namespace App\Http\Controllers;

use App\Models\MagazijnModel;
use Illuminate\Http\Request;

class MagazijnController extends Controller
{

    public function __construct()
    {
        $this->magazijnModel = new MagazijnModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazijn = $this->magazijnModel->SP_GetAllProducts();
        
        return view('Magazijn.index', [
            'title' => 'Overzicht magazijn jamin',
            'magazijn' => $magazijn
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = $request->validate([
        //     'naam' => 'required|string|max:50',
        //     'omschrijving' => 'required|string|max:255'
        // ]);

        // $newId = $this->allergeenModel->SP_CreateAllergeen(
        //     $data['naam'],
        //     $data['omschrijving']
        // );

        // return redirect()->route('Allergenen.index')
        //                  ->with('success', 'Allergeen is succesvol toegevoegd met id' . $newId);
    }

    public function AllergeenInfo()
    {
        return view('Magazijn.AllergeenInfo', [
            'title' => 'Overzicht allergenen'
        ]);

        $magazijn = $this->magazijnModel->SP_GetProductById($id);

        if (!$allergeen)
        {
            return redirect()->route('Allergenen.index')
                             ->with('error', 'Allergeen is niet gevonden');  
        }

        return view('Allergenen.show', [
            'title' => 'Details Allergeen',
            'allergeen' => $allergeen
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $allergeen = $this->allergeenModel->SP_GetAllergeenById($id);

        // if (!$allergeen)
        // {
        //     return redirect()->route('Allergenen.index')
        //                      ->with('error', 'Allergeen is niet gevonden');  
        // }

        // return view('Allergenen.show', [
        //     'title' => 'Details Allergeen',
        //     'allergeen' => $allergeen
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MagazijnModel $magazijnModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MagazijnModel $magazijnModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MagazijnModel $magazijnModel)
    {
        //
    }
}
