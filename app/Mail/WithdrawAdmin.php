<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawAdmin extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $user)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       return $this->view('emails.withdraw-admin')
            ->subject('Bitstocks - New Withdrawal Request - '.now())
            ->with(['user' => $this->user, 'data' => $this->data]);
    }
}
