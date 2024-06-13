<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $hidden = ['password'];
    protected $casts =['password' => 'hashed'];
    protected $guarded = ['user_id'];
    protected $primaryKey = 'user_id';
    public static function getRoleName(?int $index = 0)
    {
        return match ($index){
          0 => 'User' ,
          1 => 'Operator',
          2 => 'Admin',
            default => '-'
        };
    }

    public function customer()
    {
        return $this->belongsTo(Customers::class,'no_sl');
    }

    public static function gender(?int $index = 0) :string
    {
        return match ($index){
            0 => '-',
            1 => 'Laki-Laki',
            2 => 'Perempuan',
            default => 'ERROR'
        };
    }
}
