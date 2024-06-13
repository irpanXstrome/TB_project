<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerBillRecording extends Model
{
    use HasFactory;

    protected $primaryKey = 'record_id';

    protected $with = ['paymentHistories','images'];

    public function paymentHistories(): HasMany
    {
        return $this->hasMany(CustomerPaymentHistory::class,'record_id');
    }

    public function images() : HasMany{
        return $this->hasMany(ImageData::class,'record_id');
    }
}
