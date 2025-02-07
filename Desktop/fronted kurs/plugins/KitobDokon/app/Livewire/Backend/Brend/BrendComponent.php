<?php

namespace App\Livewire\Backend\Brend;

use App\Models\Brend;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;

class BrendComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search,$brendEdit=0,$brendShow=0,$name,$id,$show=0,$status;

    public function editBrend($brend){
        $this->name = $brend['name'];
        $this->id = $brend['id'];
        $this->brendEdit=1;
        $this->show=1;
    }

    public function showBrend($brend){
        $this->name = $brend['name'];
        $this->id=$brend['id'];
        $this->status =$brend['status'];
        $this->brendShow=1;
        $this->show=1;
    }

    public function updateBrend($id){
        $brend = Brend::find($id);
        if($brend->status=='active'){
            $brend->update([
                'status'=>'noactive'
            ]);
        }else{
            $brend->update([
                'status'=>'active'
            ]);
        }
    }

    public function deleteBrend($id){
        Brend::destroy($id);
    }
    public function close(){
        $this->show=0;
        $this->brendEdit=0;
        $this->brendShow=0;
    }
    public function render()
    {
        if($this->search != NULL){
            App::setLocale(session('locale'));
            $brends = Brend::where('name' , 'LIKE' , '%'.$this->search.'%')->paginate(10);
            return view('livewire.backend.brend.brend-component' , compact('brends'));
        }else{
            App::setLocale(session('locale'));
            $brends = Brend::paginate(10);
            return view('livewire.backend.brend.brend-component' , compact('brends'));
        }

    }
}
