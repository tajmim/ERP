<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMeetingMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Meeting Mail',
        );
    }

    /**
     * Get the message content definition.
     */
<<<<<<< HEAD
    
    public function build()
    {
       return $this->from('stajmimtanha@gmail.com','erp_project')
            ->view('emails.send_meeting_notification')
            ->with('data',$this->data); 
=======
        public function build()
    {
        return $this->from('atik.hasan2090@gmail.com','erp_project')
            ->view('emails.send_meeting_notification')
            ->with('data',$this->data);
>>>>>>> 90ca025caeb9145a54fd6251e0bde30979112d9a
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
