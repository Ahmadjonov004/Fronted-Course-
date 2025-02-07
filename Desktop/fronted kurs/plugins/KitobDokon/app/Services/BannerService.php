<?php

namespace App\Services;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerService
{

    public function save(BannerRequest $request){
        $img_name = md5(rand(111,999).microtime()).'.'.$request->file('image')->extension();
        Banner::create([
            'name'=>[
                'uz'=>$request->name_uz,
                'en'=>$request->name_en,
                'rus'=>$request->name_ru,
            ],
            'title'=>[
                'uz'=>$request->title_uz,
                'en'=>$request->title_en,
                'rus'=>$request->title_ru,
            ],
            'image'=>$img_name
        ]);

        $request->file('image')->storeAs('/public/banner_img' , $img_name);
    }

    public function updateBanner(Request $request, $id){
        $banner = Banner::findOrFail($id);
        if($request->hasFile('image')){
            if ("storage/banner_img/".$banner->image){
                unlink("storage/banner_img".$banner->image);
                $img_name = md5(rand(111,999).microtime()).'.'.$request->file('image')->extension();
                $request->file('image')->storeAs('public/banner_img' ,$img_name);
            }
        }else{
            $img_name = $banner->image;
        }
        $banner->update([
            'name'=>[
                'uz'=>$request->name_uz,
                'en'=>$request->name_en,
                'rus'=>$request->name_ru,
            ],
            'title'=>[
                'uz'=>$request->title_uz,
                'en'=>$request->title_en,
                'rus'=>$request->title_ru,
            ],
            'image'=>$img_name
        ]);
        return redirect()->route('banner');
    }

}
