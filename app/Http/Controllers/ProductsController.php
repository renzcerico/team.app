<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Returns all products.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function getAll(){
        return Products::orderBy('id', 'desc')->get();
    }

    /**
     * Returns a product by id.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */

    public function getById(int $id){
        return Products::where('id', $id)->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */

    public function destroy(int $id){
        if(Products::destroy($id)){
            return 'product deleted succesfully.';
        }
        return 'error creating product.' ;
    }

    /**
     * Store a newly created product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(Products::create($request->all())){
            return 'product created.';
        }
        return 'error creating product.';
    }

    /**
     * Updates an existing product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(int $id, Request $request)
    {
        $product = Products::find($id);
        $product->fill($request->all());
        if($product->save()){
            return 'product updated.';
        }
        return 'error updating product.';
    }
}
