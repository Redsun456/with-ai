<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_number',
        'program_course',
        'year_section',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'date_of_birth',
        'address',
        'contact_number',
        'email',
        'gender',
        'id_file',
        'requirement_files',
        'father_name',
        'father_birthday',
        'father_occupation',
        'father_salary',
        'father_address',
        'father_contact',
        'mother_name',
        'mother_birthday',
        'mother_occupation',
        'mother_salary',
        'mother_address',
        'mother_contact',
        'guardian_name',
        'guardian_birthday',
        'guardian_occupation',
        'guardian_salary',
        'guardian_address',
        'guardian_contact',
        'ai_eligibility_score', 
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
