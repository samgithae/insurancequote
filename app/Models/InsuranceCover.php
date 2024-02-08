<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCover extends Model
{
    use HasFactory;
    protected $fillable = [
        "insurer",
        "cost",
        "minimum_value",
        "maximum_value",
        "basic_rate",
        "minimum_premium",
        "description",
        'insurance_provider_id'
    ];

        // One to one relationship
    public function insuranceProvider()
    {
        return $this->belongsTo(InsuranceProvider::class);
    }

    public function benefit()
    {
        return $this->hasOne(Benefit::class);
    }
    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }
}
