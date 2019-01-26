<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function addClick(Request $request){
        $click = \DB::table('clicks')->where([
            'visitor'=>session()->getId(),
            'link' => $request->get('link_target')

        ])->first();
        if($click){
            $click->increment('count');

        }else{
            \DB::table('clicks')->create(array(
                'visitor'=>session()->getId(),
                'link' => $request->get('link_target'),
                'count'=> 0
    
            ));
        }
    }
}
