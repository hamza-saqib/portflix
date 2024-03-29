<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'profile_image',
        'email',
        'username',
        'password',
        'first_name',
        'last_name',
        'recovery_email',
        'theme_id',
        'tagline',
        'company_name',
        'date_of_birth',
        'gender',
        'selected_theme_path',
        'country',
        'city',
        'address',
        'bio',
        'web_url',
        'experiences_summary',
        'educations_summary',
        'skills_summary',
        'blogs_summary',
        'phone',
        'whatsapp',
        'linkedin',
        'facebook',
        'twiter',
        'instagram',
        'fiverr',
        'upwork',
        'pinterest',
        'no_of_projects',
        'no_of_clients',
        'no_of_coffee_cups',
        'no_of_code_lines',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Services::class, 'user_id', 'id');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'user_id', 'id');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id', 'id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'user_id', 'id');
    }
}
