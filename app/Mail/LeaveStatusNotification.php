<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeaveStatusNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $leave;
    public $user;
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($leave, $user, $status)
    {
        $this->leave = $leave;
        $this->user = $user;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.leave_status')
            ->subject("Your Leave Request has been {$this->status}")
            ->with([
                'leave' => $this->leave,
                'user' => $this->user,
                'status' => $this->status,
            ]);
    }
}
