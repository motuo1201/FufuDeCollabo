<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class YomerterUpdated extends Mailable
{
    use Queueable, SerializesModels;
    
    private $param;
    private $fromAddress;
    private $name;
    private $partner;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($param,$fromAddress,$name,$partner)
    {
        $this->param = $param;
        $this->fromAddress = $fromAddress;
        $this->name = $name;
        $this->partner = $partner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->name.'のヨメーターが更新されました')->from($this->fromAddress,$this->name)
                ->view('email.yomerter')->with('sendParam', $this->param);
    }
}
