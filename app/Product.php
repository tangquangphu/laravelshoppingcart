<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
        // return number_format('$%i', $this->price / 100);
    }
}
