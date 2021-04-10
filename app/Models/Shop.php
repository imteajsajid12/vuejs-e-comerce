<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'deatalse',
            ];
            public function Shop(){
                return $this->belongsTo(Shop::class);

            }
            public function User()
            {
                return $this->belongsTo(User::class);
            }

        }
