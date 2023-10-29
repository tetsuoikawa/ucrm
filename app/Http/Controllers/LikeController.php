<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateLikeRequest;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $like = new Like;

        $like->userid = Auth::user()->id;
        $like->getuser = $request->getuser;
        $like->getid = $request->getid;
        $like->articletitle = $request->articletitle;
        $like->likearticle = $request->likeid;
        $like->save();

        $user = new User;


        $url = 'http://127.0.0.1:8000/mh/';
        $url .= $request->likeid;

        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        dd($like);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLikeRequest  $request
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLikeRequest $request, Like $like)
    {
        dd($like);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , Like $like)
    {
        
        $Likes = Like::select('id', 'userid')->paginate(3000000);
        $userid = Auth::user()->id;
        $sum = $Likes->total();
        $deleteid = null;

        for($i = 0; $i < $sum; $i++){
            if($userid == $Likes->items()[$i]->userid){
                $deleteid = $Likes->items()[$i]->id;
            }
        }

        Like::destroy($deleteid);

        $url = 'http://127.0.0.1:8000/mh/';
        $url .= $request->query("item");

        return redirect($url);
    }
}
