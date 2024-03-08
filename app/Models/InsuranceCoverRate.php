<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCoverRate extends Model
{
    use HasFactory;
    protected $fillable = [
        "insurance_cover_name",
        "minimum_value",
        "maximum_value",
        "basic_rate",
        "minimum_premium",
        "description",
        "insurance_cover_id",

    ];

    public function insuranceCover()
    {
        return $this->belongsTo(InsuranceCover::class,'insurance_cover_id')->withDefault();
    }
}