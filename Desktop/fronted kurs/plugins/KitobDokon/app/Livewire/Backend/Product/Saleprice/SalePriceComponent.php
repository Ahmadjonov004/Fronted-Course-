<?php

namespace App\Livewire\Backend\Product\Saleprice;

use App\Models\Product;
use Livewire\Component;

class SalePriceComponent extends Component
{

    public $num,$show=0,$saleShow=0,$price,$sale_price=0;

    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function close(){
        $this->show=0;
        $this->saleShow=0;
    }
    public function showSalePrice($id){
        $product = Product::find($id);
        $this->show=1;
        $this->saleShow=1;
        $this->price = $product->body_price;
    }

    public function salePriceSave($id){
        $product = Product::find($id);
        $product->update([
            'sale_price'=>$this->sale_price
        ]);
        $this->close();
        return redirect()->route('product.index');
    }
    public function render()
    {
        if ($this->num!=NULL){
            $this->sale_price = $this->price + ($this->price * $this->num / 100);
        }else{
            $this->sale_price = 0;
        }
        return view('livewire.backend.product.saleprice.sale-price-component');
    }
}
