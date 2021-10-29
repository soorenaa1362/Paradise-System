<?php

namespace App\Http\Controllers\Financial;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    
    public function index()
    {
        $shops = Shop::all();
        return view('financial.shops.index', compact('shops'));
    }

    
    public function create()
    {
        return view('financial.shops.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:190',
            'seller' => 'required|max:190',
            'mobile' => 'nullable|numeric|min:11',
            'phone' => 'nullable|numeric|min:8',
            'address' => 'nullable'
        ]);

        Shop::create([
            'name' => $request->name,
            'seller' => $request->seller,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        alert()->success('فروشگاه جدید ایجاد شد', 'باتشکر');
        return redirect()->route('financial.shops.index');
    }

    
    public function show(Shop $shop)
    {
        return view('financial.shops.show', compact('shop'));
    }

    
    public function edit(Shop $shop)
    {
        return view('financial.shops.edit', compact('shop'));
    }

    
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'name' => 'required|max:190',
            'seller' => 'required|max:190',
            'mobile' => 'nullable|numeric|min:11',
            'phone' => 'nullable|numeric|min:8',
            'address' => 'nullable'
        ]);

        $shop->update([
            'name' => $request->name,
            'seller' => $request->seller,
            'mobile' => $request->mobile,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        alert()->success('فروشگاه مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('financial.shops.index');
    }

   
    public function destroy(Shop $shop)
    {
        
    }
}
