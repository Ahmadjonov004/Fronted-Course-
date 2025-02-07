<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'name'=>'array',
        'title'=>'array'
    ];

    public function imagePath(){
        return "/storage/banner_image/";
    }
}
