<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable=[
        'job_title',
        'vacancy',
        'location',
        'salary',
        'category',
        'commission',
        'details_image',
        'company_title'
    ];

}
