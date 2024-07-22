<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'menu_id', 'price', 'qty'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    protected function total(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => $attributes['price'] * $attributes['qty'],
        );
    }
}
