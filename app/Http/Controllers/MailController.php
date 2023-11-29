<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSender;

class MailController extends Controller
{
    public function sendEmail()
    {
        // data yang ingin dikirim ke kelas mail
        $name = 'John Doe';
        $message = 'This is a test email from Laravel';

        // mengirim email dengan kelas mail
        Mail::to('example@example.com')->send(new MailSender($name, $message));

        // menampilkan pesan sukses
        return 'Email sent successfully';
    }
}
