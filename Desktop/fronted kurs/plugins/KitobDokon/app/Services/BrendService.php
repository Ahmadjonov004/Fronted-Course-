<?php

namespace App\Services;

use App\Models\Brend;
use App\Repositories\BrendRepostitory;

class BrendService
{
    protected $brendService;

    public function __construct(BrendRepostitory $brendRepostitory)
    {
        $this->brendService = $brendRepostitory;
    }

    public function all(){
       return $this->brendService->getAllBrend();
    }

    public function save($data){
        $data = [
            'name'=>$data['name']
        ];
        return $this->brendService->getCreateBrend($data);
    }

    public function updateBrend($id,$data){
        $brend = Brend::find($id);
        $data = $brend->update([
            'name'=>$data['name']
        ]);
        return redirect()->route('brend.index');
    }
}
