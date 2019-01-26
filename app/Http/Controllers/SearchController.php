<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.search');
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


    public function search(Request $request)
{
  // Gets the query string from our form submission 
   if($request->ajax())
   {
       $query = " ";
       $providers = DB::table('providers')->where('service', 'LIKE', '%' . $request->search . "%")->orWhere('name','like','%'. $request->search .'%' )->orWhere('id','like','%'. $request->search.'%')->where('address','like','%'. $request->search .'%' )->orWhere('city','like','%'. $request->search.'%' )->orWhere('state','like','%'. $request->search .'%' )->get();

       if($providers)
       {
           foreach ($providers as $key => $provider){
               $query.="<div class='row'>
                                                    
               <div class='col-md-4 mt-sm-10'>
                <a href='/providers/$provider->id' onclick='trackClick(this)'>
                    <div class=''>
                        <div class='row'>
                            <div class='col-lg-4 col-sm-2 col-md-2'>
                                <img src='/storage/logo/$provider->logo' width='50' height='50' class='img-fluid rounded'> 
                            </div>
                            <div class='col-lg-8 col-sm-10 col-md-10'>
                                <h5 style='color:#0000ff;>  $provider->name</h5>   
                            
                                <h5 style='color:#0000ff;> $provider->service </h5>
                            </div>
                        </div>
                    </div> 
                </a>   
               </div>        
           </div>";
           }
           return Response($query);
         }
         else {
             return $request->search.' Not Found';
         }
      
   }
 
  // Returns an array of articles that have the query string located somewhere within 
  // our articles titles. Paginates them so we can break up lots of search results.
  
  // returns a view and passes the view the list of articles and the original query.
  
 }
}
