<?php

namespace App\Http\Controllers;
use App\Provider;
use App\User;
use App\Post;
use App\Feedback;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index', ['feedbacks'=>$feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $services = Provider::get()->pluck('name', 'id')->toArray();
        return view('feedbacks.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = $this->validate(request(), [
            'name' => 'required',
            
            'name_of_service' => 'required',
            'satisfactory' => 'required',
            'feed_back' => 'required',
            'email' => 'required',
        ]);
          
        
        $feedback = new Feedback();
        $feedback->name = $request->Input('name');
        $feedback->email = $request->Input('email');
        $feedback->user_id = auth()->user()->id;
        $feedback->name_of_service = $request->Input('name_of_service');
        $feedback->feed_back = $request->Input('feed_back');
        $feedback->satisfactory = $request->Input('satisfactory');

        
        $provider = Provider::find($feedback->provider_id);
            
        $feedback->provider()->save($feedback);
  
        return back()->with('success', 'Thanks for your Reply');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
       
    }
    public function ratings(){
        $provider = Provider::first();
        $post = Post::first();

        $rating = $post->rating([
            'rating' => 5
        ], $provider);

        return view('feedbacks/create');
    }
    public function myfeedback(){

        $feedback = Feedback::where('user_id', Auth::id())->with('service')->get();
       
        return view('feedbacks/myfeedback')->with('feedback', $feedback);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
