<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function index() {
        // dd('Test successfully!');
        $person = User::all();
        Mail::to('narutouzumaki@gmail.com')
            ->queue(new OrderShipped($person));
    }
}
