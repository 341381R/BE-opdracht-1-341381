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
        //
    }

    public function AllergeenInfo($id)
    {
        $magazijn = $this->magazijnModel->SP_GetAllergenenInfoProductById($id);

        if (!$magazijn)
        {
            return redirect()->route('Magazijn.index')
                             ->with('error', 'Product is niet gevonden');  
        }

        return view('Magazijn.AllergeenInfo', [
            'title' => 'Overzicht allergenen',
            'magazijn' => $magazijn
        ]);
    }

    public function LeverantieInfo($id)
    {
        $magazijn = $this->magazijnModel->SP_GetLeverancierInfo($id);

        if (!$magazijn)
        {
            return redirect()->route('Magazijn.index')
                             ->with('error', 'Product is niet gevonden');  
        }

        return view('Magazijn.LeverantieInfo', [
            'title' => 'Leveringsinformatie',
            'magazijn' => $magazijn
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
        //
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
