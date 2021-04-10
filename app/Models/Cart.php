<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Shop_id',
        'image',

            ];
    public function User(){
        return $this->belongsTo(Shop::class);

    }
    public function Shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
