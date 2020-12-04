<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductsCategory;
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
        $products=Product::with('categories')->get();
        $categories=Category::get();

        return view('dashboard.pages.product.showProducts',compact(['products','categories']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        return view('dashboard.pages.product.addProduct',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = $request->validate([
            "name" => 'required',
            "description" => 'required',
            "price" => 'required|numeric',
            "stock" => 'required|numeric',
            "categories"=>'required|array'
        ]);
        $product=Product::create($validations);

        if($product){
            foreach ($validations['categories'] as $category){
                ProductsCategory::create([
                    'product_id'=>$product->id,
                    'category_id'=>$category
                ]);
            }
            return back()->with('success','Product saved.');
        }
        else
            return back()->with('error','Sorry, the product not added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product=Product::with('categories')->findOrFail($id);
         $categories=Category::get();
        return view('dashboard.pages.product.editProduct',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validations = $request->validate([
            "name" => 'required',
            "description" => 'required',
            "price" => 'required|numeric',
            "stock" => 'required|numeric',
            "categories"=>'required|array'
        ]);
        $product=Product::findOrFail($id);

        if($product){
            ProductsCategory::where('product_id',$product->id)->delete();
            $product->update($validations);
            foreach ($validations['categories'] as $category){
                ProductsCategory::create([
                    'product_id'=>$product->id,
                    'category_id'=>$category
                ]);
            }
            return redirect('/products')->with('success','Product edited.');
        }
        else
            return back()->with('error','Sorry, the product not edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return back()->with('success','Product deleted.');
    }
}
