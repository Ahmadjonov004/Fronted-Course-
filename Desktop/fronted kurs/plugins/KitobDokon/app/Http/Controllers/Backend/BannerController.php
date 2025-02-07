<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BannerController extends Controller
{
    protected $mybanner;
    public function __construct(BannerService $bannerService){
        $this->mybanner = $bannerService;
    }

    public function index(){
        App::setLocale(session('locale'));
        $banners = Banner::all();
        return view('backend.banner.index' , compact('banners'));
    }

    public function store(BannerRequest $request){
        $this->mybanner->save($request);
        return redirect()->back();
    }

    public function  update(Request $request, $id)
    {
     $this->mybanner->updateBanner($request,$id);
     return redirect()->back();
    }
}
