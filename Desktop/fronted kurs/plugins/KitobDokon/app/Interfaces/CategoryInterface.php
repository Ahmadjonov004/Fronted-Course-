<?php

namespace App\Interfaces;

interface CategoryInterface
{
    public function getAllCategories();
    public function getCategoryId($id);
    public function model();

    public function createCategory($data);
}
