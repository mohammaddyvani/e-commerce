<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function detailtransaction()
    {
        return $this->hasMany(DetailTransaction::class);
    }

    public function restock()
    {
        return $this->hasMany(Restock::class);
    }

    protected $guarded = [];
}
