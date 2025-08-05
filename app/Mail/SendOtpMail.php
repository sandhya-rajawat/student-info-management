<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $subjectLine;

    public function __construct($msg, $subjectLine)
    {
        $this->msg = $msg;
        $this->subjectLine = $subjectLine;
    }

   public function build()
{
    return $this->subject($this->subjectLine)
                ->view('email.otp') 
                ->with(['msg' => $this->msg]);
}
}
?>