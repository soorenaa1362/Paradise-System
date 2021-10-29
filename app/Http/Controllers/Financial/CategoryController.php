<?php

namespace App\Http\Controllers\Financial;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('financial.categories.index', compact('categories'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('financial.categories.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:190',
            'slug' => 'required|max:190',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        Category::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        alert()->success('دسته ی جدید ایجاد شد', 'باتشکر');
        return redirect()->route('financial.categories.index');
    }

    
    public function show($id)
    {
        // $category = Category::find($id);
        // $categories = Category::all();
        // return view('financial.categories.show', compact('category', 'categories'));
    }

    
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('financial.categories.edit' , compact('category', 'categories'));
    }

    
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|max:190',
            'slug' => 'required|max:190',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        alert()->success('دسته ی مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('financial.categories.index');
    }

    
    public function destroy($id)
    {
        
    }
}
