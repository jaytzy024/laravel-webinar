<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $fillable = [
		'student_id',
		'first_name',
		'last_name',
		'course',
	];
}
