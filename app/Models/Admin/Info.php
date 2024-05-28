<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable=[
        'title',
        'body',
        'image',
        'numbersubjects',
        'numbercourses',
        'numberinstructors',
        'numberstudents',
        'subjects',
        'courses',
        'instructors',
        'students'
    ];
    use HasFactory;
}
