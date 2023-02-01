<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'files_path',
        'summary',
        'description',
        'feature_image',
        'author_name',
        'display_order',
        'slug',
    ];
}
