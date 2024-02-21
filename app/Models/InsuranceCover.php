<?php

namespace App\Models;

use App\Http\Controllers\ExcessController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCover extends Model
{
    use HasFactory;
    protected $fillable = [
        "insurance_provider_name",
        "name",
        'insurance_provider_id'
    ];

        // One to one relationship
    public function insuranceProvider()
    {
        return $this->belongsTo(InsuranceProvider::class,'insurance_provider_id')->withDefault();
    }

    public function benefit()
    {
        return $this->hasOne(Benefit::class);
    }
    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }
    public function rates()
    {
        return $this->hasMany(InsuranceCoverRate::class);
    }
    public function excesses()
    {
        return $this->hasMany(Excess::class);
    }
}
