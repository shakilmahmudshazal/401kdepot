<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class confirmation extends Mailable
{
    use Queueable, SerializesModels;

   public $advisorLogin;
  
  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($advisorLogin)
  {
    $this->advisorLogin = $advisorLogin;
  }

    public function build()
    {
        return $this->view('mails.confirmation');
    }
}
