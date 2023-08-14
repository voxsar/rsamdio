<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    //has many pdrrs
    function pdrrs(){
        return $this->hasMany(DistrictPDRR::class);
    }

    //has many quarterlyreports
    function reports(){
        return $this->hasMany(QuarterlyReport::class);
    }
}
