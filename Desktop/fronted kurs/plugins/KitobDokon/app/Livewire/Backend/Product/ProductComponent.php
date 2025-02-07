<?php

namespace App\Livewire\Backend\Product;

use App\Models\Brend;
use App\Models\Category;
use App\Models\Pimage;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;
class ProductComponent extends Component
{
    use WithPagination;
    protected $listeners = ['secondComponentEvent' , 'secondComponentMethod'];
    protected $paginationTheme = 'bootstrap';
    public function secondComponentMethod(){
    }
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

    public function active($id){
        $product = Product::findOrFail($id);
        if(isset($product)){
            if($product->status == 'active'){
                $product->update([
                    'status'=>'pending'
                ]);
            }else{
                $product->update([
                    'status'=>'active'
                ]);
            }
        }else{
            dd('No product');
        }
    }

    public function destroy($id){
        $product = Product::find($id);
        $images = Pimage::where('product_id' , $product->id)->get();
        foreach ($product->images as $image){
            if(isset($image)){
                if('storage/product_img/'.$image['path']){
                    unlink('storage/product_img/'.$image['path']);
                }
            }
        }
        foreach ($images as $image){
            $image->delete();
        }

        Product::destroy($id);
    }


    public function render()
    {
        App::setLocale(session('locale'));
        if ($this->search != NULL){
        $products = [];
            if($products = Product::where('name->'.\app()->getLocale() , 'LIKE' , '%'.$this->search.'%')->exists()){
                $products = Product::where('name->'.\app()->getLocale() , 'LIKE' , '%'.$this->search.'%')->paginate(10);
            }
            if($products = Product::whereHas('category' , function ($query){
                $query->where('name->'.\app()->getLocale(),'LIKE','%'.$this->search.'%');
            })->exists()){
                $products = Product::whereHas('category' , function ($query){
                    $query->where('name->'.\app()->getLocale(),'LIKE','%'.$this->search.'%');
                })->get();
            }
            if($products = Product::whereHas('brend' , function ($query){
                $query->where('name','LIKE','%'.$this->search.'%');
            })->exists()){
                $products = Product::whereHas('brend' , function ($query){
                    $query->where('name','LIKE','%'.$this->search.'%');
                })->get();
            }
        }else{
            $products = Product::paginate(10);
        }
        $categories = Category::all();
        $brends = Brend::all();
        return view('livewire.backend.product.product-component' , compact('products' , 'categories', 'brends'));
    }
}
