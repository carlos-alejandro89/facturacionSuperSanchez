<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\solicitaFacturaEvent;
use App\Mail\solicitaFactura;

class solicitaFacturaListener
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
    public function handle(solicitaFacturaEvent $event)
    {
        Mail::to($event->facturacion->correo_electronico)
        ->send(new solicitaFactura($event->facturacion));
    }
}
