<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\linkWasViewed;
use Request;
use DB;
use Auth;

class linkWasViewedListner
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
    public function handle(linkWasViewed $event)
    {
        $result = DB::table('views')->where([
            ['view_type', '=', 'App\Article'],
            ['view_id', '=', $event->article->id],
            ['visitor_ip', Request::ip()]
        ])->count();
        if($result == 0) {
            DB::table('views')->insert([
                [
                    'view_id'       => $event->article->id,
                    'view_type'     => 'App\Article',
                    'user_id'       => 1,
                    'visitor_ip'    => Request::ip(),
                ]
            ]);
        }
    }
}
