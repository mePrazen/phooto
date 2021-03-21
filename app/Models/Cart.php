<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['session_id'];

    public function total()
    {
        return $this->photoVariations->count();
    }
    public function totalAmount()
    {
        return $this->photovariations->sum('price');
    }

    public function photoVariations()
    {
       
        return $this->belongsToMany(PhotoVariation::class,'cart_photo');
    }
}
