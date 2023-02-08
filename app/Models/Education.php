<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree',
        'institute_name',
        'major_subject',
        'institute_level',
        'start_date',
        'end_date',
        'is_currently_studying',
        'display_order',
        'user_id',
        'description'
    ];
}
