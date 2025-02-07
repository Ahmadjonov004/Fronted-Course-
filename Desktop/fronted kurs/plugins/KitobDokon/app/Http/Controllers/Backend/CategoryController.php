<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Services\CategoryServices;

class CategoryController extends Controller
{
    protected $service;

    public function __construct(CategoryServices $categoryServices)
    {
        $this->service = $categoryServices;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $categories = $this->service->all();
      return view('backend.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $categoryRequest)
    {

        $data = ([
            'name' => [
                'uz'=>$categoryRequest->name_uz,
                'en'=>$categoryRequest->name_eng,
                'rus'=>$categoryRequest->name_ru
            ]
        ]);
        $this->service->save($data);
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $categoryRequest, string $id)
    {
        $category = $this->service->categoryShow($id);
        $category->update([
            'name'=>[
                'uz'=>$categoryRequest->name_uz,
                'eng'=>$categoryRequest->name_eng,
                'rus'=>$categoryRequest->name_ru,
            ],
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
