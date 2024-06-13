<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customers extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_sl';

    protected $with = ['user'];

    public function user(): HasOne
    {
        return $this->hasOne(Users::class,'user_id','user_id');
    }
}
