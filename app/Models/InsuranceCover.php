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
        "description"
    ];

        // One to one relationship
    public function insuranceProvider()
    {
        return $this->belongsTo(InsuranceProvider::class);
    }
}
