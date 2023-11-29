<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $person;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($person)
    {
        //
        $this->person = $person;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hokage@gmail.com', 'Tsunade')
                    ->subject('Verification Email')
                    ->view('emails.test_mail');
    }
}
