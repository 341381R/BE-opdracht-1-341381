<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $producten = $this->productModel->SP_GetAllProductsByDate($request->input('startDatum'), $request->input('eindDatum'));
        
        return view('Product.index', [
            'title' => 'Overzicht producten uit het assortiment',
            'producten' => $producten
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
    public function show($id)
    {
        $product = $this->productModel->SP_GetProductById($id);

        if (!$product)
        {
            return redirect()->route('Product.index')
                             ->with('error', 'Product is niet gevonden');  
        }

        return view('Product.show', [
            'title' => 'Product',
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductModel $productModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductModel $productModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductModel $productModel)
    {
        //
    }
}
