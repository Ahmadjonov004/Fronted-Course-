<?php

namespace App\Livewire\Backend\Banner;

use App\Models\Banner;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;
class BannerComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public  $name,$title,$id,$image,$show=0,$showBanner=0,$updateBanner = 0 ;

    public function imagePath(){
        return "/storage/banner_img/";
    }
    public function bannerShow($id){
        $banner = Banner::find($id);
        $this->show=1;
        $this->showBanner=1;
        $this->name = $banner['name'];
        $this->title = $banner['title'];
        $this->image = $banner['image'];
        $this->id = $banner['id'];
    }

    public function bannerUpdate($id){
        $banner = Banner::find($id);
        $this->show=1;
        $this->updateBanner=1;
        $this->name = $banner['name'];
        $this->title = $banner['title'];
        $this->image = $banner['image'];
        $this->id = $banner['id'];
    }

    public function delete($id){
        $banner = Banner::find($id);
        if("storage/banner_img/".$banner->image){
            unlink("storage/banner_img/".$banner->image);
            $banner->delete();
        }else{
            $banner->delete();
        }
    }

    public function close(){
        $this->show=0;
        $this->showBanner=0;
        $this->updateBanner=0;
    }

    public function render()
    {
        App::setLocale(session('locale'));
        $banners = Banner::paginate(10);
        return view('livewire.backend.banner.banner-component' , compact('banners'));
    }
}
