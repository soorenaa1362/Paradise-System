<?php

namespace App\Http\Controllers\Financial;

use App\Models\Buy;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyController extends Controller
{
    
    public function index()
    {
        $buys = Buy::all();
        return view('financial.buys.index', compact('buys'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('financial.buys.create', compact('categories'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:190',
            'unit' => 'required|max:190',
            'number' => 'required|max:190',
            'unit_price' => 'required|max:190',
            'payment' => 'required|max:190',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable',
        ]);

        Category::create([
            'title' => $request->title,
            'unit' => $request->unit,
            'number' => $request->number,
            'unit_price' => $request->unit_price,
            'payment' => $request->payment,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        dd($request);


        alert()->success('اطلاعات خرید وارد شد', 'باتشکر');
        return redirect()->route('financial.buys.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
