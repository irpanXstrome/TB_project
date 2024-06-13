<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPaymentHistory extends Model
{
    use HasFactory;

    public function recordFrom()
    {
        return $this->belongsTo(CustomerBillRecording::class,'record_id');
    }
}
