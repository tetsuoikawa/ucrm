<?php

namespace App\Http\Controllers;

use App\Models\post;
use Inertia\Inertia;
use Illuminate\Http\Request;
// use App\Http\Requests\StoremhRequest;
// use App\Http\Requests\UpdatemhRequest;

class MhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
                              'shoulder', 'arm', 'waist', 'leg', 'contact')->get();

        return Inertia::render('mh/index' , [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        https://www.bing.com/ck/a?!&&p=1e44bdfa01e6abd7JmltdHM9MTY4NDcxMzYwMCZpZ3VpZD0wZmZkYmZlOC1jZThjLTYyNjMtMjQzZS1hZTljY2Y2NjYzNTImaW5zaWQ9NTI5OA&ptn=3&hsh=3&fclid=0ffdbfe8-ce8c-6263-243e-ae9ccf666352&u=a1L3ZpZGVvcy9yaXZlcnZpZXcvcmVsYXRlZHZpZGVvP3E9JWUzJTgyJWE4JWUzJTgzJTlhK0FMR1MlZTMlODMlOTAlZTMlODMlODMlZTMlODMlODEmcXM9biZzcD0tMSZscT0wJnBxPSVlMyU4MiVhOCVlMyU4MyU5YSthbGdzJWUzJTgzJTkwJWUzJTgzJTgzJWUzJTgzJTgxJnNjPTEtMTAmc2s9JmN2aWQ9MDYzQ0RCRDI4NkZGNDI0MkFGNjM3NzgxQTY4NDMzMzgmZ2hzaD0wJmdoYWNjPTAmZ2hwbD0mYWRsdD1zdHJpY3QmdG9Xd3c9MSZyZWRpZz02MDhCQ0Q2QUY2Mzc0QzhCQkRFNTBBODYwNUEyMTQ2QSZydT0lMmZzZWFyY2glM2ZxJTNkJTI1RTMlMjU4MiUyNUE4JTI1RTMlMjU4MyUyNTlBJTJiQUxHUyUyNUUzJTI1ODMlMjU5MCUyNUUzJTI1ODMlMjU4MyUyNUUzJTI1ODMlMjU4MSUyNnFzJTNkbiUyNmZvcm0lM2RRQlJFJTI2c3AlM2QtMSUyNmxxJTNkMCUyNnBxJTNkJTI1RTMlMjU4MiUyNUE4JTI1RTMlMjU4MyUyNTlBJTJiYWxncyUyNUUzJTI1ODMlMjU5MCUyNUUzJTI1ODMlMjU4MyUyNUUzJTI1ODMlMjU4MSUyNnNjJTNkMS0xMCUyNnNrJTNkJTI2Y3ZpZCUzZDA2M0NEQkQyODZGRjQyNDJBRjYzNzc4MUE2ODQzMzM4JTI2Z2hzaCUzZDAlMjZnaGFjYyUzZDAlMjZnaHBsJTNkJTI2YWRsdCUzZHN0cmljdCUyNnRvV3d3JTNkMSUyNnJlZGlnJTNkNjA4QkNENkFGNjM3NEM4QkJERTUwQTg2MDVBMjE0NkEmbW1zY249dndyYyZtaWQ9NUVGMUIzRUM2QTVBMjNGNTE2NjI1RUYxQjNFQzZBNUEyM0Y1MTY2MiZGT1JNPVdSVk9SQw&ntb=1
        return Inertia::render('mh/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        if($request->title !== null){
            $request->title == 'if成功';
        };
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

        $post->title = $request->title;
        $post->contact = $request->content;
        $post->series = $request->series;
        $post->gender = $request->gender;
        $post->username = $request->username;
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
        $a = "aa";
        dd($a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mh  $mh
     * @return \Illuminate\Http\Response
     */
    public function edit(post $mh)
    {
        //
        dd($mh);
        return Inertia::render('mh/mypage', [
            'item' => $mh
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
    public function destroy(post $mh)
    {
        //
    }

    public function rank()
    {
        //
        return Inertia::render('mh/rank');

    }

    public function mypage()
    {
        //
        $posts = post::select('id', 'title', 'series', 'gender', 'head',
                              'shoulder', 'arm', 'waist', 'leg', 'contact')->get();

        return Inertia::render('mh/mypage' , [
            'posts' => $posts
        ]);

    }

    public function modalsample()
    {
        //
        return Inertia::render('mh/modalsample');

    }

    
}
