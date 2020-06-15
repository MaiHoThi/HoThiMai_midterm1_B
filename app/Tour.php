<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    function getPrice()
    {
        $price=number_format($this->price,0,',','.');
        return $price."đ";
    }
}
