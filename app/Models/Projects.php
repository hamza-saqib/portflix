<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'summary',
        'description',
        'display_order',
        'thumbnail',
        'min_price',
        'start_date',
        'end_date',
        'is_currently_working',
        'experience_id',
        'user_id'
    ];
}
