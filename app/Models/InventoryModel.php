<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    protected $table = 'inventory';
    protected $fillable = ['product_name','price','category','stock_quantity'];
}
