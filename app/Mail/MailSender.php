<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    // properti publik untuk menyimpan data
    public $name;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $message)
    {
        // menerima data dari luar kelas mail
        $this->name = $name;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // menentukan properti seperti subjek, penerima, dan lainnya
        return $this->from('laravel@gmail.com', 'Laravel')
                    ->subject('Hello from Laravel')
                    ->to('example@example.com')
                    ->view('mails.verification-email');
    }
}
