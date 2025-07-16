<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_data = Product::all(); // fetch all product records
        return view('admin.main.manage_product', ['product_data' => $product_data]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all(); // saari category database se fetch kar li
        return view('admin.main.add_product', ['categories' => $data]); // categories naam se bhej rahe view me
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'cat_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->cat_id = $request->cat_id;

        $file = $request->file('image');
        $filename = time() . "_img." . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/products'), $filename);
        $product->image = $filename;

        $res = $product->save();

        if ($res) {
            Alert::success('Success', 'Product Added Successfully!');
        } else {
            Alert::error('Error', 'Something went wrong!');
        }

        return redirect('/add_product');
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
   // ProductController.php

public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('admin.main.edit_product', compact('product'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'cat_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->cat_id = $request->cat_id;

    // Optional image update
    if ($request->hasFile('image')) {
        $oldImage = public_path('uploads/products/' . $product->image);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        $file = $request->file('image');
        $filename = time() . "_img." . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/products'), $filename);
        $product->image = $filename;
    }

    $product->save();

    Alert::success('Updated!', 'Product updated successfully.');
    return redirect()->route('manage_product');
}


    /**
     * Remove the specified resource from storage.
     */
   
public function destroy($id)
{
    $product = Product::findOrFail($id);

    // Delete image if it exists
    if ($product->image && file_exists(public_path('uploads/products/' . $product->image))) {
        unlink(public_path('uploads/products/' . $product->image));
    }

    Product::destroy($id); // <- this deletes the record

    Alert::success('Deleted!', 'Product deleted successfully.');

    return redirect()->back();
}

}
