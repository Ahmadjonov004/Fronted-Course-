<?php

namespace App\Services;

use App\Interfaces\CategoryInterface;
use App\Repositories\CategoryRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
class CategoryServices
{

    protected $category;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    public function all(){
        return $this->category->getAllCategories();
    }

    public function save($data)
    {
        return $this->category->createCategory($data);
    }

    public function categoryShow($id){
        return $this->category->getCategoryId($id);
    }


}
