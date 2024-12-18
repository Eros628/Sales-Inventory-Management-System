<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\InventoryModel;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function order_view()
    {
        $products = InventoryModel::all();
        $orders = OrderModel::all();
        return view('order',['orders' => $orders, 'products' =>$products]);
    }

    public function store()
    {
        
        $orders = new OrderModel;
        $orders->name = request('name');
        $orders->product_name = request('product_name');
        $orders->quantity = request('quantity');
        $orders->save();

        
        $product = InventoryModel::where('product_name', request('product_name'))->first();

        if ($product) {
           
            $new_stock = $product->stock_quantity - request('quantity');
            $product->stock_quantity = $new_stock;
            $product->save();
        }
        return redirect()->back();

    }

    public function edit($id)
    {
        $products = InventoryModel::all();
        $older_orders = OrderModel::all();
        $orders = OrderModel::find($id);
        return view('orderEdit',['orders' => $orders, 'older' => $older_orders,'products' =>$products]);
    }

    
    public function update(Request $request,  $id)
    {
        $orders = OrderModel::find($id);

        $originalQuantity = $orders->quantity;
        $orders->update([
            'name' => $request->name,
            'product_name' => $request->product_name,
            'quantity' => $request->quantity
        ]);

        $quantityDifference = $originalQuantity - $request->quantity;

        $product = InventoryModel::where('product_name', request('product_name'))->first();
        
        if ($product) {
            $product->stock_quantity += $quantityDifference;
            $product->save();
        }

    
        return redirect('order')->with('success','The order has been updated successfully!');
    }

   
    public function delete($id)
    {
        $orders = OrderModel::find($id);
        $orders->delete();
        return redirect('order')->with('success','Deleted Succesfully!');
    }
}
