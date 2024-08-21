<?php

namespace App\Events;

use App\Models\cards_model;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CardWasViewed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $card;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(cards_model $cards_model)
    {
        $this->card = $cards_model;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return [];
        // return new PrivateChannel('channel-name');
    }
}
