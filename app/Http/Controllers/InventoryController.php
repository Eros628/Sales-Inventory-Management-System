<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryModel;

class InventoryController extends Controller
{
    
    public function inventory_view()
    {
        $products = InventoryModel::all();
        return view('inventory',['products' => $products]);
    }

    
    public function store()
    {
        $products = new InventoryModel;
        $products->product_name = request('product_name');
        $products->price= request('price');
        $products->category= request('category');
        $products->stock_quantity = request('stock_quantity');

        $products->save();
        return redirect()->back();
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $old = InventoryModel::all();
        $update = InventoryModel::find($id);
        return view('inventoryEdit',['old' => $old, 'new' => $update]);
    }

  
    public function update(Request $request,  $id)
    {
        $products = InventoryModel::find($id);
        $products->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category' => $request->category,
            'stock_quantity' => $request->stock_quantity
        ]);

        return redirect('inventory')->with('success','The inventory has been updated successfully!');
    }

   
    public function delete($id)
    {
        $products = InventoryModel::find($id);
        $products->delete();
        return redirect('inventory')->with('success', 'Deleted Succesfully');
    }
}
