<?php

namespace App\Http\Controllers;
use App\User;
use App\Provider;
use Illuminate\Http\Request;
use file;

use validator;


class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $providers = Provider::all();

        return view('providers.index', ['providers'=>$providers]);

        if(Auth::check())
        $providers = Provider::where('user_id', Auth::user()->id)->get();
        return view('providers.index', ['providers'=>$providers]);
        return view('auth.login');
    }

    public function adduser(Request $request){
        //take a provider and add to a user
        $providers = Provider::find($request->input($provider_id));
        $user = User::where('email', $request->input('email'));
        if($user){
            $provider->users()->attach($user_id);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
         $this->validate(request(), [
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'certification' => 'required',
            'phone' => 'required',
            'special_tool' => 'required',
           
            'email' => 'required',
            'description' => 'required',
            
            'service' => 'required',
            'logo' => 'image|nullable|max:1999',
            
           
            'minimum_price' => 'required|numeric'
        ]);
       
        if($request->hasFile('logo')){
            //get file name with extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('logo')->storeAs('public/logo', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $provider = new Provider();
        $provider->logo = $fileNameToStore;
        $provider->name = $request->Input('name');
        $provider->address = $request->Input('address');
        $provider->email = $request->Input('email');
        $provider->phone= $request->Input('phone');
        $provider->description= $request->Input('description');
        $provider->minimum_price = $request->Input('minimum_price');
        $provider->service = $request->Input('service');
        $provider->state = $request->Input('state');
        $provider->city = $request->Input('city');
        $provider->user_id = auth()->user()->id;
        $provider->certification = $request->Input('certification');
        $provider->special_tool = $request->Input('special_tool');
        $user = User::find($provider->user_id);
            
        $user->providers()->save($provider);
        
  
        return back()->with('success', 'Your Service has been Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
       
        $provider = Provider::find(  $provider->id);
        return view('providers.show', ['provider'=>$provider]);
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
        $provider = Provider::find(  $provider->id);
        return view('providers.edit', ['provider'=>$provider]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        //save details when changed.
        $providersUpdate = Provider::where('id', $provider->id)
                ->update([
                    'name'=> $request->input('name'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'address' => $request->input('address'),
                    'city' => $request->input('city'),
                    'state' => $request->input('state'),
                    'description' => $request->input('description'),
                    'logo' => $request->input('logo')                 
                ]);

                if($providersUpdate){
                    return redirect()->route('providers.show', ['provider'=> $provider->id])
                    ->with('success', 'your Profile has been update');
                }
                return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
        dd($provider);
        $findProvider = Provider::find($provider->id);
        if($findProvider->delete()){

            //redirect
            return redirect()->route('listservices')
            ->with('success', 'service deleted Successfully');
        }

        return back()->withInput->with('error', 'Service could not be deleted.');
    }

    public function searchService(Request $request){
        $name = $request->q;
        $search_name = DB::table('providers')->where('service','like',"%$name%" )->orWhere('name','like',"%$name%" )->orWhere('id','like',"%$name%")->get();
        return view('/search')->with('search',$search_name);
        
    }

    
}
