<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'education_level',
        'country',
        'university',
        'major',
        'benefits',
        'age_min',
        'age_max',
        'gpa_min',
        'gpa_max',
        'english_tests',
        'required_documents',
        'registration_open',
        'registration_close',
        'status',
    ];

    protected $casts = [
        'age_min' => 'integer',
        'age_max' => 'integer',
        'gpa_min' => 'decimal:2',
        'gpa_max' => 'decimal:2',
        'registration_open' => 'date',
        'registration_close' => 'date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
