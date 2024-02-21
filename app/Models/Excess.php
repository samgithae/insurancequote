<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excess extends Model
{
    use HasFactory;
    protected $fillable = [
        "insurance_cover_name",
        "name",
        "amount",
        "insurance_cover_id"
    ];
    public function insuranceCover()
    {
        return $this->belongsTo(InsuranceCover::class,'insurance_cover_id')->withDefault();
    }
}
