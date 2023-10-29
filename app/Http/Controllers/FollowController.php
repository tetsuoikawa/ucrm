<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Http\Requests\StoreFollowRequest;
use App\Http\Requests\UpdateFollowRequest;
use App\Models\post;
use App\Models\User;
use App\Models\Like;
use App\Models\comment;
use App\Models\Searchpost;
use Inertia\Inertia;
use Illuminate\Http\Request;
// use App\Http\Requests\StoremhRequest;
use App\Http\Requests\UpdatemhRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
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
     * @param  \App\Http\Requests\StoreFollowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFollowRequest $request)
    {
        $username = $request->query("username");
        $othername = $request->query("othername");

        if($username == $othername){
            return redirect('http://127.0.0.1:8000/mh/mypage');
        }

        $user = User::select('id','name')
        ->where('name', '=',  $username)->orderBy('id', 'desc')->paginate(30);

        $others = User::select('id','name')
        ->where('name', '=',  $othername)->orderBy('id', 'desc')->paginate(30);

        $search = Follow::select('id')->where('follow', '=',  $username)
        ->where('follower', '=',  $othername)->orderBy('id', 'desc')->paginate(30);

        $total = $search->total();

        if($total == 0){

            $follow = new follow;

            $follow->follow = $user[0]->name;
            $follow->followid  = $user[0]->id;
            $follow->follower = $others[0]->name;
            $follow->followerid = $others[0]->id;  
            $follow->save();
        }


        $nowname = Auth::user()->name;
        $nowid = Auth::user()->id;
        $userid = $others[0]->id;

        $users = User::select('id','name','content','twitter','facebook','instagram')
        ->where('name', '=',  $othername)->orderBy('id', 'desc')->paginate(30);
        
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
        'shoulder', 'arm', 'waist', 'leg', 'contact', 'userid')
        ->where('userid', '=',  $userid)->orderBy('id', 'desc')->paginate(30);

        $likes = like::select('id')
        ->where('getuser', '=',  $userid)->orderBy('id', 'desc')->paginate(30);

        $followsum = Follow::select('id')
        ->where('followid', '=',  $userid)->paginate(30000000);

        $followersum = Follow::select('id')
        ->where('followerid', '=',  $userid)->paginate(30000000);

        $sumarticle = $posts->total();

        $postpoints  = $posts->total();
        $likepoints = $likes->total();
        $total = $postpoints + $likepoints;

        return Inertia::render('mh/otherpage' , [
            'posts' => $posts,
            'total' => $sumarticle,
            'points' => $total,
            'users' => $users,
            'othername' => $othername,
            'otherid' => $userid,
            'nowname' => $nowname,
            'nowid' => $nowid,
            'followsum' => $followsum->total(),
            'followersum' => $followersum->total(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFollowRequest  $request
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFollowRequest $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , Like $like)
    {

        $userid = $request->userid;
        $otherid = $request->otherid;
        $othername = $request->othername;
        $username = $request->username;

        $deleteid = Follow::select('id')
        ->where('followid', '=',  $userid)->where('followerid', '=', $otherid )->paginate(30);
        $delete = $deleteid[0]->id;

        Follow::destroy($delete);

        //ここから上までが削除処理

        //http://127.0.0.1:8000/mh/mypage/3test3?username=3test3

        $url = 'http://127.0.0.1:8000/mh/mypage/';
        $url .= $othername;
        $url .= '?username=';
        $url .= $othername;
        $mypage = 'http://127.0.0.1:8000/mh/mypage';

        if($username !== $othername){
            return redirect($url);
        }else{
            return redirect($mypage);
        }

    }
}
