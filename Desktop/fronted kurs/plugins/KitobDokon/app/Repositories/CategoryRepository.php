<?php

namespace App\Repositories;
use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{
 public function getAllCategories()
 {
     return Category::all();
 }

 public function model()
 {
    return Category::class;
 }


    public function getCategoryId($id)
 {
    return Category::findOrFail($id);
 }

 public function createCategory($data)
 {
     return Category::create($data);
 }


}
