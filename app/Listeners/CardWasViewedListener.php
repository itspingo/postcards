<?php

namespace App\Listeners;

use App\Events\CardWasViewed;
use DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Request;

class CardWasViewedListener
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
     * @param  \App\Events\CardWasViewed  $event
     * @return void
     */
    public function handle(CardWasViewed $event)
    {
        $result = DB::table('views')->where([
            ['view_type', '=', 'App\card_model'],
            ['view_id', '=', $event->card->id],
            ['visitor_ip', Request::ip()]
        ])->count();
        if ($result == 0) {
            $insert_arr = [
                'view_id' => $event->card->id,
                'view_type' => 'App\card_model',
                'visitor_ip' => Request::ip(),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ];
            if (isset(auth()->user()->id)) {
                $insert_arr['web_user_id'] = auth()->user()->id;
            }
            DB::table('views')->insert([
                $insert_arr
            ]);
        }
    }
}
