<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'company_name',
        'job_title',
        'description',
        'start_date',
        'end_date',
        'is_currently_working',
        'display_order',
        'user_id',
    ];
}
