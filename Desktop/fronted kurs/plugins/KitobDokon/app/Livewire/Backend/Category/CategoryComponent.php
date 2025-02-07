<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;
class CategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name,$status,$id,$show=0,$categoryShow=0,$name_uz,$name_eng,$name_rus,$categoryEdit=0,$search;
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        $this->show=1;
        $this->categoryEdit=1;
        $this->id = $category->id;
        $this->name = $category['name'];
        $this->status=$category['status'];
    }

    public function showCategory($id){
        $category = Category::findOrFail($id);
        $this->show=1;
        $this->categoryShow=1;
        $this->id = $category->id;
        $this->name = $category['name'];
        $this->status=$category['status'];
    }

    public function close(){
        $this->show=0;
        $this->categoryShow=0;
        $this->categoryEdit=0;
    }

    public function deleteCategory($id){
        $category = Category::destroy($id);
    }

    public function updateStatus($id){
        $category = Category::findOrFail($id);
       if($category['status'] == 'active'){
           $category->update([
               'status'=>'noactive'
           ]);
       }else{
           $category->update([
               'status'=>'active'
           ]);
       }

    }
    public function render()
    {
        if($this->search != NULL){
            App::setLocale(session('locale'));
            $categories = Category::where('name->'.\app()->getLocale() , 'LIKE' , '%'.$this->search.'%')->paginate(10);
            return view('livewire.backend.category.category-component' , compact('categories'));
        }else{
            App::setLocale(session('locale'));
            $categories = Category::paginate(10);
            return view('livewire.backend.category.category-component' , compact('categories'));
        }

    }
}
