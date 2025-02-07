<?php

namespace App\Interfaces;

interface ProductInterface
{

    public function getAllProduct();
    public function getActiveProduct();
    public function getProductId($id);
    public function getCreateProduct($data);
}
