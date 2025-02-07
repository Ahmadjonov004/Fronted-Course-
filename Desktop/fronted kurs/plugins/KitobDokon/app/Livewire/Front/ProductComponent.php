<?php

namespace App\Livewire\Front;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ProductComponent extends Component
{
    public $data;

    public function mount()
    {
        $this->data = session('shopping');
    }



    public function shoppingCard($id)
    {
        $product = Product::find($id);

        if (session('shopping')) {
            foreach (session('shopping') as $shopping) {
                if ($shopping['id'] != $product->id) {
                    session()->push('shopping', [
                        'id' => $product->id,
                        'count' => 1
                    ]);
                }
            }
        } else {
            session()->push('shopping', [
                'id' => $product->id,
                'count' => 1
            ]);
        }
//        session()->forget('shopping');
        return redirect(route('shopcard'));
    }


    public function addToCart($product)
    {
        $this->emit('addItemToCart', \session('shopping'));
    }

    public function render()
    {
        App::setLocale(session('locale'));
        $products = Product::where('status', 'active')->orderBy('id', 'desc')->get();
        $categories = Category::where('status', 'active')->get();
        $banners = Banner::all();
        return view('livewire.front.product-component', compact('products', 'categories'));
    }
}
/**
 * cart => [
 * 'product_id' => 2,
 * 'product_id' => 4
 * ]
 */
