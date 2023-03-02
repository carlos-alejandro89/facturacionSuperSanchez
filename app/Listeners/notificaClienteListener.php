<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\notificaClienteEvent;
use App\Mail\notificacionesClientes;

class notificaClienteListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(notificaClienteEvent $event)
    {
        Mail::to($event->facturacion->correo_electronico)->send(new notificacionesClientes($event->facturacion, $event->motivo, $event->asunto));
    }
}
