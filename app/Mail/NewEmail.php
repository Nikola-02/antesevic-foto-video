<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewEmail extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $fromEmail;
    public string $note;
    public string $date;
    public string $mailView;
    public string $phone;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $fromEmail, string $note, string $phone, string $date, string $mailView)
    {
        $this->name = $name;
        $this->fromEmail = $fromEmail;
        $this->note = $note;
        $this->phone = $phone;
        $this->date = $date;
        $this->mailView = $mailView;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->fromEmail, $this->name),
            subject: 'Rezervacija datuma',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.'.$this->mailView,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
