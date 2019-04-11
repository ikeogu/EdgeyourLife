<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
   public function index(){
       return view('index');
   }

   public function fetch(Request $request){
    if ($request->get('query')){
        $query = $request->get('query');
        $data = DB::table('providers')->where('service', 'like', '%{$query}%')->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        foreach($data as $row){
            $output .='<li><a href="#">'.$row->service .'</a><li>';
        }
        $output .='</ul>';
        echo $output;

    }
}

}
