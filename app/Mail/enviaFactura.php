<?php

namespace App\Mail;

use App\Models\facturacion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class enviaFactura extends Mailable
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
        ->subject('Su factura está lista')
        ->attach($this->facturacion->file_xml)
        ->attach($this->facturacion->file_pdf)
        ->view('emails.envioFactura');
    }
}
