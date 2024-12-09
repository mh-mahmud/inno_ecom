<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'career';
    protected $fillable = [
        'job_title',
        'job_description',
        'requirements',
        'location',
        'employment_type',
        'salary_range',
        'posted_date',
        'closing_date',
        'contact_email',
        'status',
    ];
    protected $casts = [
        'posted_date' => 'datetime',
        'closing_date' => 'date',
    ];
}
