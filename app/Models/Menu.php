<?php

namespace App\Models;

use App\Traits\HasScope;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory, HasSlug, HasScope;

    protected $fillable = [
        'category_id', 'name', 'slug', 'image', 'price', 'description'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('storage/menu/' . $image),
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function transactions():BelongsToMany{
        return $this
            ->belongsToMany(Transaction::class,'transaction_details')
            ->withPivot(['price']);
    }

}
