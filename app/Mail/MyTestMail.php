<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }
    public function build()
    {
        // return $this->details;
        // $email = DB::table('email')->get();
        return $this->subject('Approval Document Perusahaan')
                    ->view('email.TestMail', [
                        'nama' => $this->details['nama'],
                        'email' => $this->details['email'],
                        'keyunik' => $this->details['keyunik']
                    ]);
    }
}
