<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traininig extends Model
{
    use HasFactory;

    protected $fillable=[
        'training_title',
        'trainer_name',
        'training_category',
        'training_fees',
        'trainer_designation',
        'affiliate_commission',
        'traning_file'
    ];


}
