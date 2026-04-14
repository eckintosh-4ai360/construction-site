<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $details)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Website Consultation Request from ' . $this->details['name'],
            replyTo: [
                new Address($this->details['email'], $this->details['name']),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quote-request',
        );
    }
}
