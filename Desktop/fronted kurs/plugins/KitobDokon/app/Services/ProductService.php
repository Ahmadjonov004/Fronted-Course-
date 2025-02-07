<?php

namespace App\Services;

use App\Http\Requests\ProductRequest;
use App\Models\Pimage;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    protected $productService;

    public function __construct(ProductRepository $productRepository){
        $this->productService = $productRepository;
    }

    public function all(){
        return $this->productService->getAllProduct();
    }

    public function active(){
        return $this->productService->getActiveProduct();
    }

    public function save(ProductRequest $productRequest){
        $num=1;
        $arr = [];
        $product = Product::create([
            'name'=>[
                'uz'=>$productRequest->name_uz,
                'en'=>$productRequest->name_eng,
                'rus'=>$productRequest->name_ru,
            ],
            'body_price'=>$productRequest->body_price,
            'count'=>$productRequest->count,
            'category_id'=>$productRequest->category_id,
            'brend_id'=>$productRequest->brend_id,
            'description'=>[
                'uz'=>$productRequest->description_uz,
                'en'=>$productRequest->description_eng,
                'rus'=>$productRequest->description_ru,
            ]
        ]);
        if ($productRequest->hasFile('image')) {
            $images = $productRequest->file('image');

            if (is_array($images)) {
                for ($i = 0; $i < count($images); $i++) {
                    $file = $images[$i];
                    $img_name = md5(rand(111, 999) . microtime()) . '.' . $file->getClientOriginalExtension();
                    Pimage::create([
                        'product_id' => $product->id,
                        'path' => $img_name,
                    ]);
                    $file->storeAs('public/product_img', $img_name);
                }
            } else {
                // Agar birgina fayl kelgan bo'lsa, uni qayta ishlash
                $img_name = md5(rand(111, 999) . microtime()) . '.' . $images->getClientOriginalExtension();
                Pimage::create([
                    'product_id' => $product->id,
                    'path' => $img_name,
                ]);
                $images->storeAs('public/product_img', $img_name);
            }
        } else {
            // Error message for no file provided
            // Xato xabar yoki lozim bo'lsa, boshqa jarayon
            dd("No file uploaded");
        }
        return redirect()->back();
    }


    public function updateProduct(Request $request, $product){
    $request->validate([
        'name_uz'=>'required',
        'name_en'=>'required',
        'name_ru'=>'required',
        'body_price'=>'required',
        'count'=>'required',
        'category_id'=>'required',
        'brend_id'=>'required',
        'description_uz'=>'required',
        'description_en'=>'required',
        'description_ru'=>'required',
    ]);
    $product->update([
        'name_uz'=>$request->name_uz,
        'name_en'=>$request->name_en,
        'name_ru'=>$request->name_ru,
        'count'=>$request->count,
        'body_price'=>$request->body_price,
        'category_id'=>$request->category_id,
        'brend_id'=>$request->brend_id,
        'description_uz'=>$request->description_uz,
        'description_en'=>$request->description_en,
        'description_ru'=>$request->description_ru,
    ]);
    if ($request->hasFile('image')){
        $images = Pimage::where('product_id' , $product->id)->get();
        foreach ($images as $img){
            $img->delete();
        }
    foreach ($product->images as $image){
        if('storage/product_img/'.$image['path']){
            unlink('storage/product_img/'.$image['path']);
        }
    }

    for($i=0;$i<count($request->file('image'));$i++){
        $img_name = md5(rand(111,999).microtime()) .'.'.$request->file('image')[$i]->extension();
        Pimage::create([
            'product_id'=>$product->id,
            'path'=>$img_name
        ]);
        $request->file('image')[$i]->storeAs('/public/product_img',$img_name);
    }
    }
    }
}
