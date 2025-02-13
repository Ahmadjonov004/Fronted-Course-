<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $casts = [
      'name'=>'array',
      'description'=>'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function images(){
        return $this->hasMany(Pimage::class , 'product_id');
    }

    public function brend(){
        return $this->belongsTo(Brend::class , 'brend_id');
    }
}
