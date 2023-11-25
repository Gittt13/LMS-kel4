<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\User;
use App\Entities\Message;
use LMS\Modules\Courses\Repositories\Contracts\CourseRepositoryInterface;

class StudentController extends Controller
{
    public function index()
    {
        return view('home');
    }
}