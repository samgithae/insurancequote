<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    protected $fillable = [
        "insuranceCover",
        "benefit",
        "value",
        "status",
        "cost"
    ];

    public function insuranceCover()
    {
        return $this->belongsTo(InsuranceCover::class);
    }
}
