<?php

namespace App\Interfaces;

interface BrendInterface
{
    public function getAllBrend();
    public function getBrendId($id);
    public function getCreateBrend($data);
    public function getUpdateBrend($id,$data);
}
