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
        return view('search.search');
    }

    public function autocomplete(Request $request)
    {
        $data = Provider::select("name")
                ->where("name","LIKE","%{$request->input('query')}%")
                ->get();
   
        return response()->json($data);
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
    //     $query = Request::input('search');
        
    
    //        $providers = DB::table('providers')->where('service', 'LIKE', '%' . $query . "%")->orWhere('name','like','%'. $query .'%' )->orWhere('id','like','%'. $query.'%')->where('address','like','%'. $query .'%' )->orWhere('city','like','%'. $query.'%' )->orWhere('state','like','%'. $query .'%' )->get();
    
    //     return view('search.search', compact('providers','query'));
    
   
//   // Gets the query string from our form submission 
//    if($request->ajax())
//    {
//        $query = " ";
//        $providers = DB::table('providers')->where('service', 'LIKE', '%' . $request->search . "%")->orWhere('name','like','%'. $request->search .'%' )->orWhere('id','like','%'. $request->search.'%')->where('address','like','%'. $request->search .'%' )->orWhere('city','like','%'. $request->search.'%' )->orWhere('state','like','%'. $request->search .'%' )->get();

//        if($providers)
//        {
//            foreach ($providers as $key => $provider){
//                $query.="<h3><a href='/providers/$provider->id'>$provider->name</a></h3>
               
//                <a href='/providers/$provider->id'>view more</a>
//                <h5>$provider->description</h5>";
//                $query.="
//                <div class='col-lg-4 col-sm-3 col-md-3'>
//                <img src='/storage/logo/$provider->logo' class='img-fluid img-responsive '> 
//               </div>
//                ";
//                $query.="
//                 <div>
//                 <h3>$provider->address</h3>
//                 <h4>$provider->email</h4>
//                 <h4>$provider->phone</h4>
//                 </div>
//                ";
               
//            }
//            return Response($query);
//         }
       
//         else {
//                 $query="Service Not Found";
//              return back()->with($query);
//          }
//     }   
   }
  
  // Returns an array of articles that have the query string located somewhere within 
  // our articles titles. Paginates them so we can break up lots of search results.
  
  // returns a view and passes the view the list of articles and the original query.
  
 
}
