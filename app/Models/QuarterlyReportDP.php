<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuarterlyReportDP extends Model
{
    use HasFactory;

    //project_images json as array
    protected $casts = [
        'project_images' => 'array',
    ];
    
    public function report()
    {
        return $this->belongsTo(QuarterlyReport::class);
    }
}
