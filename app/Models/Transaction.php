<?php

namespace App\Models;

use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
    use HasFactory, HasScope;

    protected $fillable = [
        'user_id', 'invoice', 'reserv_date', 'name', 'phone', 'status', 'grand_total', 'snap_token'
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menus():BelongsToMany{
        return $this
            ->belongsToMany(Menu::class,'transaction_details')
            ->withPivot(['price']);
    }
}
