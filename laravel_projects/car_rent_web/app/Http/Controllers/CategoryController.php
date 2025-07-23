<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.main.manage_cat', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.main.add_cat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
    $request->validate([
        'cat_name' => 'required|string|max:255'
    ]);

    // Save to DB
    Category::create([
        'cat_name' => $request->cat_name
    ]);

  Alert::success('success', 'Category added successfully!');
    return redirect()->route('manage_cat');



    // Redirect or message
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
    public function edit($id)
{
    $category = Category::findOrFail($id); // Get data from DB
    return view('admin.main.edit_cat', compact('category')); // Pass to view
}


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $request->validate([
        'cat_name' => 'required|string|max:255'
    ]);

    $category = Category::findOrFail($id);
    $category->cat_name = $request->cat_name;
    $category->save();

    Alert::success('Updated!', 'Category updated successfully.');
    return redirect()->route('manage_cat');
}


    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    // Find the category by ID, or fail if not found
    $category = Category::findOrFail($id);

    // Delete the category
    $category->delete();

    // Optional: SweetAlert or session flash message
    Alert::success('Deleted!', 'Category deleted successfully.');

    return redirect()->back();
}

}
