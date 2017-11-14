<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price','currency','special_offer','special_offer_formula','special_offer_description','hiden'];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
