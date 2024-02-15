<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    protected $fillable = [
        "insurance_cover",
        "benefit",
        "value",
        "status",
        "cost",
        'insurance_cover_id'
    ];

    public function insuranceCover()
    {
        return $this->belongsTo(InsuranceCover::class,'insurance_cover_id')->withDefault();
    }
}
