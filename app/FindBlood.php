<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FindBlood extends Model
{
    protected $fillable = [
        'blood_group_id','division_id','district_id','upozila_id','union_id','location','patient_medical_history',
    ];
}