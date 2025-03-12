<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'birthplace',
        'birthdate',
        'address',
        'gender',
        'phone',
        'email',
        'work_address',
        'work_type',
        'work_phone',
        'education',
        'degree_file',
        'certificate_file',
        'previous_work',
        'references',
        'professional_behavior_notes',
    ];
}
