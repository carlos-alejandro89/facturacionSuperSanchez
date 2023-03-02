<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\facturacion;
use App\Models\motivos_declina_solicitud;

class notificacionesClientes extends Mailable
{
    use Queueable, SerializesModels;

    public $facturacion;
    public $motivo;
    public $asunto;

    public function __construct(facturacion $facturacion_,motivos_declina_solicitud $motivo_, $asunto_)
    {
        $this->facturacion = $facturacion_;
        $this->motivo = $motivo_;
        $this->asunto = $asunto_;
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
        ->subject('Súper Sánchez')
        ->view('emails.notificacionesClientes');
    }
}
