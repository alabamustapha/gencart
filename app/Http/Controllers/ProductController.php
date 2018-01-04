<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use LukePOLO\LaraCart\Facades\LaraCart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        if($product) {
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $path = $request->image->store('public/products');
                $product->image = str_replace('public/', '', $path);
				$product->save(); 
            }
        }
        
        return back()->with('message', $product->name . " Added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addToCart(Request $request, Product $product){

        $qty = $request->has('qty') ? $request->qty : 1;
        $instruction = $request->has('instruction') ? $request->description . '<br> Additional Instruction: ' . $request->instruction : $request->description;
        $item = LaraCart::add($product->id, $product->name, $qty, $product->price, ['description' => $product->description]);

        $totalItems = count(LaraCart::getItems());
        $total      = LaraCart::total();
        $itemQty    = $item->qty;
        $itemPrice  = $item->price($formatted = true);
        $itemID     = $item->id;

        return json_encode(['id' => $itemID, 'price' => $itemPrice, 'qty' => $itemQty, 'total' => $total, 'totalItems' => $totalItems]);
    }

    public function details(Product $product){
        return $product->toJson();
    }
   
}
