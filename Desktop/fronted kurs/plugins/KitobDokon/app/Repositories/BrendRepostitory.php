<?php

namespace App\Repositories;

use App\Interfaces\BrendInterface;
use App\Models\Brend;

class BrendRepostitory implements BrendInterface
{

    public function getAllBrend()
    {
        return Brend::all();
    }
    public function getBrendId($id)
    {
        return Brend::findOrFail($id);
    }
    public function getCreateBrend($data)
    {
        return Brend::create($data);
    }
    public function getUpdateBrend($id,$data)
    {
        return Brend::where('id' , $id)->update($data);
    }
}
