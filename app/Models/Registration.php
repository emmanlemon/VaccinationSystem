<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';

    protected $fillable = [
        'studentNumber','studentType',
        'courseId','sy','section','tuitionFee','advisingStatus','registrationStatus'
    ];

    public function vaccination()
    {
        return $this->hasOne('App\Models\Vaccination');
    }

    


   

}
