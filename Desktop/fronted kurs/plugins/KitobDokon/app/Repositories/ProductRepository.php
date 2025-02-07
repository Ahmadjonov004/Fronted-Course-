<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface
{
    public function getAllProduct()
    {
      return Product::all();
    }

    public function getActiveProduct()
    {
        return Product::where('status' , 'active')->get();
    }

    public function getCreateProduct($data)
    {
        return Product::create($data);
    }

    public function getProductId($id)
    {
        return Product::findOrFail($id);
    }
}
