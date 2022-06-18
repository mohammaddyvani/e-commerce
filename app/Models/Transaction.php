<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function detailTransaction()
    {
        return $this->hasMany(DetailTransaction::class, 'id_transaction');
    }

    public function address(){
        return $this->belongsTo(Address::class, 'id_address');
    }
}
