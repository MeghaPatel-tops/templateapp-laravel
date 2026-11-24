<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productArray = DB::table('product')->get();
        return view('product',['products'=>$productArray]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'productname'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        $imagepath = $request->file('image')->store('products','public');
        DB::table('product')->insert([
            'pname'=>$request['productname'],
            'price'=>$request['price'],
            'description'=>$request['description'],
            'image'=>$imagepath,

        ]);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $result = DB::table('product')->where('id',"=",$id)->first();
        return view('ProductEdit',['singleProduct'=>$result]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            'productname'=>'required',
            'price'=>'required',
            'description'=>'required',
            // 'image'=>'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);
        if($request->file('image')){
            $imagepath = $request->file('image')->store('products','public');
        }
        else{
            $imagepath=$request['img1'];
        }
       
       
        DB::table('product')->where('id',$id)->update([
            'pname'=>$request['productname'],
            'price'=>$request['price'],
            'description'=>$request['description'],
            'image'=>$imagepath,

        ]);
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = DB::table('product')->where('id',"=",$id)->delete();
        return redirect('/product');
    }
}
