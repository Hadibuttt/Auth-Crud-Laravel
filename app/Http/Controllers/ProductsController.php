<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Session;

class ProductsController extends Controller
{
    public function index()
    {
       $products = products::orderBy('id', 'DESC')->get();
       $count = products::count();
       return view('index', compact('products','count'));
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'unique:products|min:3|max:25',
            'description' => 'string|min:3|max:255',
            'price' => 'integer|min:0|max:255'
        ]);

        products::create($validatedData);

        Session::flash('success', "Product Added Successfully!");
        return redirect()->back();
    }

    public function edit($id)
    {
        $product = products::find($id);
        return view('edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'min:3|max:25',
            'description' => 'string|min:3|max:255',
            'price' => 'integer|min:0|max:255'
        ]);

        products::where('id',$id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description
        ]);
        Session::flash('success', "Product Updated Successfully!");
        return redirect()->back();
    }

    public function delete($id)
    {
        products::find($id)->delete();
        Session::flash('success', "Product Deleted Successfully!");
        return redirect()->back();
    }

}