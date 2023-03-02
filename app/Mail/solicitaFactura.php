<?php

namespace App\Mail;

use App\Models\facturacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class solicitaFactura extends Mailable
{
    use Queueable, SerializesModels;

    public $facturacion;

    public function __construct(facturacion $facturacion_)
    {
        $this->facturacion = $facturacion_;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from($address = 'noreply@supersanchez.com', $name = 'Súper Sánchez')
        ->subject('Súper Sánchez: Solicitud recibida')
        ->view('emails.solicitudRecibida');
    }
}
