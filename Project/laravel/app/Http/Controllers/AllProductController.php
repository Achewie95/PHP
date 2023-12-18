<?php

namespace App\Http\Controllers;

use App\Models\AllProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class AllProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('allProducts', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules for the form fields
        $validatedData = $request->validate([
            'productID' => 'required|numeric',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'weight' => 'required|numeric',
            'manufacturer' => 'required|string',
            'quantity' => 'required|numeric',
            'sku' => 'required|string',
            'url' => 'required|string',
        ]);

        // Create a new Product instance
        $product = new Product();

        // Assign values from the form to the Product model attributes
        $product->productID = $validatedData['productID'];
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->category = $validatedData['category'];
        $product->weight = $validatedData['weight'];
        $product->manufacturer = $validatedData['manufacturer'];
        $product->{'Stock Quantity'} = $validatedData['quantity'];
        $product->sku = $validatedData['sku'];
        $product->ImageURL = $validatedData['url'];

        $product->save();

        return redirect('/dashboard?success=Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AllProduct $allProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AllProduct $allProduct)
    {
        return view('editProduct')->with('product', $allProduct);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AllProduct $allProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/dashboard?success=Product deleted successfully!');
    }
}
