<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;


class OrdenPedido extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $cart;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(User $user, $cart)
    {
        $this->cart = $cart;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orden-pedido')->subject('Un Cliente ha Realizado Un nuevo Pedido.');
    }
}
