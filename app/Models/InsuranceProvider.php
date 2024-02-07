<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceProvider extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "logo"
    ];
    
    //  one to many relationship
    public function insuranceCovers()
    {
        return $this->hasMany(InsuranceCover::class);
    }
}
