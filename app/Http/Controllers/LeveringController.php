<?php

namespace App\Http\Controllers;

use App\Models\LeverancierController;
use Illuminate\Http\Request;

class LeveringController extends Controller
{

    public function __construct()
    {
        $this->leveringModel = new LeveringModel();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leveringen = $this->leveringModel->SP_GetAllLeveringen(NULL , NULL);
        
        return view('Leveringen.index', [
            'title' => 'Overzicht leveringen',
            'leveringen' => $leveringen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LeverancierController $leverancierController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LeverancierController $leverancierController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LeverancierController $leverancierController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeverancierController $leverancierController)
    {
        //
    }
}
