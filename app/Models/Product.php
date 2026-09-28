<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    protected function formattedPrice(): Attribute
    {
    return Attribute::make(
        get: fn (mixed $value, array $attributes) => 'Rp ' . number_format($attributes['price'], 0, ',', '.')
    );
    }
    protected $fillable = ['category_id', 'code', 'name', 'unit', 'price', 'stock'];
 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
