<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [              
        'qty',       
        'product_id',       
    ];

    public function products()
    {
        return $this->hasOne(Product::class,'id', 'product_id');        
    }

    public function user()
    {
        return $this->hasOne(User::class,'user_id', 'id');        
    }


}
