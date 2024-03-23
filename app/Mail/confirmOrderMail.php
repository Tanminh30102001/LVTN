<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class confirmOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @var \App\Models\Order
     * @param  \App\Models\Order  $order
     * @return void
     */
    protected $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order;
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $fromadd="tanminh.tn30102001@gmail.com";
        // $fromname=env('MAIL_FROM_NAME');
        $fromname=$this->order->email;
        // dd( $fromadd, $fromname);
        return new Envelope(
            from: new Address($fromadd,$fromname),
            subject: 'Confirm Order Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.confirmOrder',
            with:[
                'order'=>$this->order
            ]
        );
    }
    // public function build(){
    //     return $this->from('tanminh.tn30102001@gmail.com')->view('emails.confirmOrder');
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
