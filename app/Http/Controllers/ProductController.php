<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function ajouterproduit()
    {
        $categories = Category::all()->pluck('category_name', 'category_name');
        return view('admin.ajouterproduit')->with('categories', $categories);
    }

    public function sauverproduit(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required|unique:products',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);
        if ($request->hasFile('product_image')) {
            // 1 : get file name with ext
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            // 2 : get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // 3 : get just file extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            // 4 : file name store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //uploader
            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_image = $fileNameToStore;
        $product->status = 1;
        $product->save();

        return redirect('/ajouterproduit')->with('status', 'Le produit ' . $product->product_name . 'a été ajoutée avec succès');
    }

    public function produits()
    {
        $products = Product::get();
        return view('admin.produits')->with('products',$products);
    }
}
