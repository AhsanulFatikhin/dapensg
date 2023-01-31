<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailFeedback extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }
    public function build()
    {
        // return $this->details;
        // $email = DB::table('email')->get();
        return $this->subject('Approved Success')
                    ->view('email.EmailFeedback', [
                        'nama' => $this->details['nama'],
                        'keyunik' => $this->details['keyunik']
                    ]);
    }
}
