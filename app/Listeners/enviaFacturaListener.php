<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\enviaFacturaEvent;
use App\Mail\enviaFactura;

class enviaFacturaListener
{

    public function __construct()
    {
        //
    }


    public function handle(enviaFacturaEvent $event)
    {
        Mail::to($event->facturacion->correo_electronico)->send(new enviaFactura($event->facturacion));
    }
}
