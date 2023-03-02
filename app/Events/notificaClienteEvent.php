<?php

namespace App\Events;

use App\Models\facturacion;
use App\Models\motivos_declina_solicitud;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class notificaClienteEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $facturacion;
    public $asunto;
    public $motivo;

    public function __construct(facturacion $facturacion_, motivos_declina_solicitud $motivo_, $asunto_)
    {
        $this->facturacion = $facturacion_;
        $this->motivo = $motivo_;
        $this->asunto = $asunto_;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
