<?php

namespace App\Http\Controllers\admin;

use App\Products;
use App\Products_categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $pr = new App\Products();
            $data = $pr->productsJoinCategories();
            return view('admin/products/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = products_categories::all();
        return view('admin/products/create',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        if($request->hasFile('product_images')) {
            $imagePath = $request->file('product_images')->store('public/upload');
            $imageName = explode('/', $imagePath);
            $product->product_images = last($imageName);
        }else{
            $product->product_images = ' ';
        }
        $product->product_name = $request->get('product_name');
        $product->product_price = $request->get('product_price');
        $product->product_content = $request->get('product_content');
        $product->product_category = $request->get('product_category');
        $product->product_status = $request->get('product_status');
        $product->save();
        return redirect(action('admin\ProductsController@index'));
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
        $cate = Products_categories::all();
        $data = Products::find($id);
        return view('admin/products/edit',compact('data','cate'));
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
        $product = Products::find($id);
        $product->product_name = $request->get('product_name');
        $product->product_price = $request->get('product_price');
        $product->product_status = $request->get('product_status');
        $product->product_content = $request->get('product_content');
        $product->product_category = $request->get('product_category');
        if($request->hasFile('product_images')){
            $imagePath =  $request->file('product_images')->store('public/upload');
            $imageName = explode('/',$imagePath);
            $product->product_images = last($imageName);
        }
        $product->save();
        return redirect(action('admin\ProductsController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product.delete();
        return redirect(action('admin\ProductsController@index'));
    }
}
