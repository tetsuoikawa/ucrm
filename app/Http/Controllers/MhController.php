<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Models\Like;
use App\Models\comment;
use App\Models\Follow;
use App\Models\Searchpost;
use Inertia\Inertia;
use Illuminate\Http\Request;
// use App\Http\Requests\StoremhRequest;
use App\Http\Requests\UpdatemhRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class MhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if( Auth::user() == null){
            $username = '名無しのユーザー';
        }else{
            $username = Auth::user()->name;
        }
        

        $posts = post::select('id', 'title', 'series', 'gender', 'head',
                              'shoulder', 'arm', 'waist', 'leg', 'contact')->paginate(30);


                              

        $sums = $posts->total();              

        return Inertia::render('mh/index' , [
            'posts' => $posts,
            'totals' => $sums,
            'username' => $username,
        ]);

    }

    public function search(Request $request)
    { 
        $points = User::upoint('名無しのユーザー');
        dd($points);

    if( Auth::user() == null){
        $username = '名無しのユーザー';
    }else{
        $username = Auth::user()->name;
        $userid = Auth::user()->id;

        $follow = Follow::select('followerid')
        ->where('followid', '=', $userid)->paginate(3000000);
        //こうすると、IDを取得できる　$follow[0]->followerid
    }

    $posts = post::searchposts($request->search , $request->searchgender, $request->searchseries, $follow )
    ->select('id', 'title', 'series', 'gender', 'head',
    'shoulder', 'arm', 'waist', 'leg', 'contact')->paginate(30);

    $sum = $posts->total();


    return Inertia::render('mh/index' , [
      'posts' => $posts, 
      'totals' => $sum,
      'username' => $username,
      'follow' => $username,
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( Auth::user() == null){
            $username = '名無しのユーザー';
        }else{
            $username = Auth::user()->name;
        }
        

        return Inertia::render('mh/Create' ,[
            'username' => $username,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        
        $request->validate([ 
            'title' => ['required', 'max:25'],  
            'series' => ['required'], 
            'gender' => ['required'], 
            'head' => ['required' , 'max:30'], 
            'shoulder' => ['required' , 'max:30'],
            'arm' => ['required' , 'max:30'],
            'waist' => ['required' , 'max:30'],
            'leg' => ['required' , 'max:30'],
            'content' => ['max:100'],
            ]);

        $post = new post;

        if( Auth::user()->name !== null){
            $post->userid = Auth::user()->id;
        }
        $a = 7;
        $posts = $post::find($a);
        dd($posts);
        $post->title = $request->title;
        $post->contact = $request->content;
        $post->series = $request->series;
        $post->gender = $request->gender;
        $post->head = $request->head;
        $post->shoulder = $request->shoulder;
        $post->arm = $request->arm;
        $post->waist = $request->waist;
        $post->leg = $request->leg;
        $post->save();


        return to_route('mh.index')->with([

            'complete' => '登録しました'

        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mh  $mh
     * @return \Illuminate\Http\Response
     */
    public function show(post $mh)
    {
        $click = True;
        $number = $mh->id;
        $like = Like::select('id', 'userid', 'likearticle')->where('likearticle', '=',  $number)->paginate(10000000);
        $username = User::select()->paginate(10000000);
        $name = User::select('name')->where('id', '=',  $mh->userid)->paginate(10000);
        $hostname =  $name[0]->name;
        $hostid = $mh->userid;
        $total = post::select('id')->paginate(100000000);
        $comment = comment::select('id', 'userid', 'username', 'articleid', 'comment', 'created_at')->where('articleid', '=',  $number)->orderBy('id', 'desc')->paginate(30);
        $articleid = null;
        

        if( Auth::user() == null){
            $nowuser = '名無しのユーザー';
            $userid = null;
            $likeuser = 1;
            $click = False;
        }else{
            $nowuser = Auth::user()->name;
            $userid = Auth::user()->id;
            $likeuser = Like::select('userid', 'likearticle')->where('userid', '=', Auth::user()->id)->where('likearticle', '=',  $number)->paginate(10000000);
            
            if($likeuser->total() !== 0){
                $click = False;
            }
        }

        $articleid = $mh->id;

        return Inertia::render('mh/Show', [
            'posts' => $mh,
            'comments' => $comment,
            'likes' => $like,
            'userid' => $userid,
            'click' => $click,
            'articlenumber' =>  $articleid,
            'username' =>  $username,
            'hostname' => $hostname,
            'hostid' => $hostid,
            'nowuser' => $nowuser,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mh  $mh
     * @return \Illuminate\Http\Response
     */
    public function edit(post $mh)
    {
        $userid = Auth::user()->id;
        if($userid == $mh->userid){
            return Inertia::render('mh/Edit', [
                'post' => $mh
            ]);
        }else{
            return Inertia::render('mh/index');
        }
    }

    public function update(UpdatemhRequest $request, post $mh)
    {
        $mh->title = $request->title;
        $mh->contact = $request->contact;
        $mh->series = $request->series;
        $mh->gender = $request->gender;
        $mh->userid = Auth::user()->id;
        $mh->head = $request->head;
        $mh->shoulder = $request->shoulder;
        $mh->arm = $request->arm;       
        $mh->waist = $request->waist;
        $mh->leg = $request->leg;
        $mh->save();

        $url = 'http://127.0.0.1:8000/mh/';
        $url .= $request->id;

        return redirect($url)->with([
            'message' => '更新しました',
            'status' => 'success',
        ]);
    }

    public function updateuser(UpdateUserRequest $request, User $mh)
    {
        $request->validate([ 
            'name' => ['required', 'max:30'],  
            'email' => ['required', 'max:50'], 
            'content' => ['max:100'], 
            'twitter' => ['max:50'], 
            'facebook' => ['max:50'],
            'instagram ' => ['max:50'],
            ]);

        $userid = Auth::user()->id;
        $user = user::select('password')->where('id', '=',  $userid)->paginate(3);

        $mh->password = $user[0]->password;
        $mh->name = $request->name;
        $mh->email = $request->email;
        $mh->imageicon = $request->imageicon;
        $mh->imageheader = $request->header;
        $mh->content = $request->content;
        $mh->twitter = $request->twitter;
        $mh->facebook = $request->facebook;
        $mh->instagram = $request->instagram;       
        $mh->save();


        return redirect('http://127.0.0.1:8000/mh/mypage')->with([
            'message' => '更新しました',
            'status' => 'success',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemhRequest  $request
     * @param  \App\Models\mh  $mh
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mh  $mh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , post $mh)
    {
        //
        $deleteid = $request->query("mh");

        $deletecomment = comment::select('id')
        ->where('articleid', '=',  $deleteid)->paginate(300000);

        $deletelike = like::select('id')
        ->where('likearticle', '=',  $deleteid)->paginate(300000);

        //記事のコメントも消すシステム
        for($dnumber = 0; $dnumber < $deletecomment->total(); $dnumber++){
            comment::destroy($deletecomment[$dnumber]->id);
        }

        //記事のいいねを消すシステム
        for($dlike = 0; $dlike < $deletelike->total(); $dlike++){
            like::destroy($deletelike[$dlike]->id);
        }
        post::destroy($deleteid);

        $url = 'http://127.0.0.1:8000/mh/index';
        return redirect($url);
    }

    public function rank()
    {
        if( Auth::user() == null){
            $username = '名無しのユーザー';
        }else{
            $username = Auth::user()->name;
        }
        
        return Inertia::render('mh/rank' ,[
            'username' => $username,
        ]);

    }

    public function mypage()
    {
        //
        $userid = Auth::user()->id;

        $username = Auth::user()->name;
        
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
        'shoulder', 'arm', 'waist', 'leg', 'contact', 'userid')
        ->where('userid', '=',  $userid)->orderBy('id', 'desc')->paginate(30);

        $likes = like::select('id')
        ->where('userid', '=',  $userid)->orderBy('id', 'desc')->paginate(30);

        $users = User::select('id','name','content','twitter','facebook','instagram')
        ->where('name', '=',  $username)->orderBy('id', 'desc')->paginate(30);

        $sumarticle = $posts->total();
        $postpoints  = $posts->total();
        $likepoints = $likes->total();
        $total = $postpoints + $likepoints;

        //dd($posts->items()[0]->id);

        $followsum = Follow::select('id')
        ->where('followid', '=',  $userid)->paginate(30000000);

        $followersum = Follow::select('id')
        ->where('followerid', '=',  $userid)->paginate(30000000);
                    
        
        return Inertia::render('mh/mypage' , [
            'posts' => $posts,
            'total' => $sumarticle,
            'points' => $total,
            'users' => $users,
            'username' => $username,
            'followsum' => $followsum->total(),
            'followersum' => $followersum->total(),
        ]);

    }

    public function otherpage(Request $request)
    {

        

        $name = $request->query("username");

        //ログインしていない場合の名前設定
        $nowname = $request->query("nowname");

        //ログイン している/いない 際のID設定
        if($nowname !== '名無しのユーザー'){
            $nowid = Auth::user()->id;
        }else{
            //0の場合はログインしていない
            $nowid = 0;
        }
        

        $users = User::select('id','name','content','twitter','facebook','instagram')
        ->where('name', '=',  $name)->orderBy('id', 'desc')->paginate(30);
        
        $userid = $users[0]->id;

        
        
        $follows = Follow::select('id','follow','follower','followerid')
        ->where('followid', '=',  $nowid)->where('followerid', '=',  $userid)->paginate(30);

        $followsum = Follow::select('id')
        ->where('followid', '=',  $userid)->paginate(30000000);

        $followersum = Follow::select('id')
        ->where('followerid', '=',  $userid)->paginate(30000000);

        $follow = True;
        
        if($follows->total() !== 0){
            $follow = False;
        }
        
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
        'shoulder', 'arm', 'waist', 'leg', 'contact', 'userid')
        ->where('userid', '=',  $userid)->orderBy('id', 'desc')->paginate(30);

        $likes = like::select('id')
        ->where('getid', '=',  $userid)->orderBy('id', 'desc')->paginate(30);


        $sumarticle = $posts->total();

        $postpoints  = $posts->total();
        $likepoints = $likes->total();
        $total = $postpoints + $likepoints;

        //dd($posts->items()[0]->id);

                    
        return Inertia::render('mh/otherpage' , [
            'posts' => $posts,
            'total' => $sumarticle,
            'points' => $total,
            'users' => $users,
            'othername' => $name,
            'nowname' => $nowname,
            'nowid' => $nowid,
            'otherid' => $userid,
            'follow' => $follow,
            'followsum' => $followsum->total(),
            'followersum' => $followersum->total(),
        ]);

    }

    public function modalsample()
    {
        //
        return Inertia::render('mh/modalsample');

    }
    
    public function comment()
    {


        $userid = Auth::user()->id;
        $username = Auth::user()->name;
        
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
        'shoulder', 'arm', 'waist', 'leg', 'contact', 'userid')->paginate(3000000000);

 
        $comments = comment::select('id', 'articleid', 'userid', 'comment', 'updated_at', 'articletitle')->where('userid', '=',  $userid)->orderBy('id', 'desc')->paginate(300000);

        $total = $posts->total();



        //dd($posts->items()[0]->id);
                    
        
        return Inertia::render('mh/mypage_comment' , [
            'posts' => $posts,
            'total' => $total,
            'comment' => $comments,
            'username' => $username,
        ]);

    }

    public function like()
    {

        $userid = Auth::user()->id;
        $username = Auth::user()->name;
        
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
        'shoulder', 'arm', 'waist', 'leg', 'contact', 'userid')->paginate(3000000000);

        $likes = like::select('id', 'likearticle', 'updated_at', 'articletitle','userid')
        ->where('userid', '=',  $userid)->orderBy('id', 'desc')->paginate(300000);

        $total = $posts->total();

        //dd($posts->items()[0]->id);
        
        return Inertia::render('mh/mypage_like' , [
            'posts' => $posts,
            'total' => $total,
            'like' => $likes,
            'username' => $username,
        ]);

    } 

    public function createuser()
    {

        $userid = Auth::user()->id;

        $user = user::select('id', 'name', 'email','imageicon', 'imageheader', 'content', 'twitter', 'facebook', 'instagram', 'point')->where('id', '=',  $userid)->paginate(3);

        return Inertia::render('mh/Createuser', [
            'user' => $user,
        ]);

    } 
}
