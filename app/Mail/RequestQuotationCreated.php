<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestQuotationCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $fullname;
    public $product;
    public $product_type;
    public $specs;
    public $rq_id;

    public function __construct($fullname, $product, $product_type, $specs,$rq_id)
    {
        $this->fullname = $fullname;
        $this->product = $product;
        $this->product_type = $product_type;
        $this->specs = $specs;
        $this->rq_id =$rq_id;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request Quotation Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */

    public function content(): Content
    {
        return new Content(
            view: 'customer.emails.0003',
            with: [
                'fullname' => $this->fullname,
                'product' => $this->product,
                'product_type' => $this->product_type,
                'specs' => $this->specs,
            ],
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
