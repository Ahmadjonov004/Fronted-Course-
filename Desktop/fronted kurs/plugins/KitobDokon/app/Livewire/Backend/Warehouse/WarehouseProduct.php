<?php

namespace App\Livewire\Backend\Warehouse;

use App\Models\Brend;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\App;
use Livewire\Component;

use Livewire\WithPagination;

class WarehouseProduct extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $id,$name,$body_price,$sale_price,$discount_price,$count,$category,$brend,$status,$productShow=0,$show=0,$search;
    public $productUpdate=0,$cat,$bren,$description,$images;

    public function showProduct($id){
        $product = Product::find($id);
        $this->id = $product->id;
        $this->name = $product->name;
        $this->body_price = $product->body_price;
        $this->sale_price = $product->sale_price;
        $this->discount_price = $product->discount_price;
        $this->count = $product->count;
        $this->category = $product->category->name['uz'];
        $this->brend = $product->brend->name;
        $this->status = $product->status;
        $this->images = $product->images;
        $this->show=1;
        $this->productShow=1;
    }
    public function updateProduct($id){
        $product = Product::find($id);
        $this->id = $product->id;
        $this->name = $product->name;
        $this->body_price = $product->body_price;
        $this->sale_price = $product->sale_price;
        $this->discount_price = $product->discount_price;
        $this->count = $product->count;
        $this->cat = $product->category->name['uz'];
        $this->bren = $product->brend->name;
        $this->status = $product->status;
        $this->description = $product->description;
        $this->show=1;
        $this->productUpdate=1;
    }
    public function close(){
        $this->productShow=0;
        $this->productUpdate=0;
        $this->show=0;
    }
    public function render()
    {
        App::setLocale(session('locale'));
        $products = Product::paginate(10);
        $categories = Category::all();
        $brends = Brend::all();
        return view('livewire.backend.warehouse.warehouse-product' , compact('products' , 'categories','brends'))->layout('backend.warehouse.index');
    }
}
