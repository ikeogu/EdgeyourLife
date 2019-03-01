<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Provider;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


   
  // Gets the query string from our form submission 
//    if($request->ajax())
//    {
//        $query = " ";
//        $providers = DB::table('providers')->where('service', 'LIKE', '%' . $request->search . "%")->orWhere('name','like','%'. $request->search .'%' )->orWhere('id','like','%'. $request->search.'%')->where('address','like','%'. $request->search .'%' )->orWhere('city','like','%'. $request->search.'%' )->orWhere('state','like','%'. $request->search .'%' )->get();

//        if($providers)
//        {
//            foreach ($providers as $key => $provider){
//                $query.="<div class='row'>
                                                    
//                <div class='col-md-4 mt-sm-10' style='padding-top:30px;'>
                
//                     <div class=''>
//                         <div class='row'>
//                             <div class='col-lg-4 col-sm-2 col-md-2'>
//                                 <img src='/storage/logo/$provider->logo' width='50' height='50' class='img-fluid img-responsive'> 
//                             </div>
//                             <div class='col-lg-8 col-sm-10 col-md-10'>
//                                 <h5 style='color:black;>  $provider->name</h5>   
                            
//                                 <h5 style='color:black;> $provider->service </h5>
//                                 <a href='/providers/$provider->id' onclick='trackClick(this)'>view more</a> 
//                             </div>
//                         </div>
//                         <hr>
//                     </div> 
                  
//                </div>        
//            </div>";
//            }
//            return Response($query);
//         }
       
//         else {
//                 $query="Service Not Found";
//              return back()->with($query);
//          }
//    }
  
  // Returns an array of articles that have the query string located somewhere within 
  // our articles titles. Paginates them so we can break up lots of search results.
  
  // returns a view and passes the view the list of articles and the original query.
  
 
}
