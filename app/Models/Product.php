<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'stock',
        'is_active',
    ];

    // Product belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Product has many ProductImages
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Product has many OrderItems
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
