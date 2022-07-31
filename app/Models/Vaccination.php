<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    protected $table = 'vaccination'; 
    
    protected $fillable = [
        'vaccinated',
        'brand',
        'firstDose',
        'provider1',
        'secondDose',
        'provider2',
        'booster',
        'provider3',
        'boosterDate',
        'reason'
    ];

    
    public function registrations()
    {
        return $this->belongsTo('App\Models\Registration');
    }
}
