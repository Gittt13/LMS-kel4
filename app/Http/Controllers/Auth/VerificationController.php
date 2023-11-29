<?php

namespace App\Http\Controllers\Auth;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    // Override default method from trait
    public function verify(EmailVerificationRequest $verifikasi)
    {
        // $request->fulfill();
        // // Menuju ke dashboard
        // return 'Anda telah terverifikasi';
        // $request = User::all();
        // Mail::to('narutouzumaki@gmail.com')
        //     ->queue(new OrderShipped($request));

        foreach ($verifikasi as $v) {
            if (request()->route('id') == $v->id && request()->input('token') == $v->remember_token) {
                auth()->login($v);
            }
        }
    }
}
