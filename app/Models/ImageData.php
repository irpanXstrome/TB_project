<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageData extends Model
{
    use HasFactory;

    public function fromRecord() : BelongsTo{
        $this->belongsTo(CustomerBillRecording::class,'record_id');
    }
}
