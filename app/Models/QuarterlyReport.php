<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuarterlyReport extends Model
{
    use HasFactory;

    //related to district 
    function district(){
        
        return $this->belongsTo(District::class);
    }

    //has many quarterlyreportcp
    function clubprojects(){
        return $this->hasMany(QuarterlyReportCP::class);
    }

    //has many quarterlyreportcp
    function districtprojects(){
        return $this->hasMany(QuarterlyReportDP::class);
    }
}
