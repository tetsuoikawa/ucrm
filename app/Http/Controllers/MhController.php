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
        return Inertia::render('mh/index');
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



        $request->validate([ 
            'title' => ['required', 'max:20'], 
            'content' => ['required'], 
            ]);

        $post = new post;

        $post->title = $request->title;
        $post->contact = $request->content;

        $post->save();

        return to_route('mh.create')->with([

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
        //
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
        return Inertia::render('mh/mypage');

    }
}
