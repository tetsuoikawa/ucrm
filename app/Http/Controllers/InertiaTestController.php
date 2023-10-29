<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;


class InertiaTestController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Inertia/Index' , [
            'blogs' => InertiaTest::all()
        ]);
    }

    public function create(){
        https://www.bing.com/ck/a?!&&p=1e44bdfa01e6abd7JmltdHM9MTY4NDcxMzYwMCZpZ3VpZD0wZmZkYmZlOC1jZThjLTYyNjMtMjQzZS1hZTljY2Y2NjYzNTImaW5zaWQ9NTI5OA&ptn=3&hsh=3&fclid=0ffdbfe8-ce8c-6263-243e-ae9ccf666352&u=a1L3ZpZGVvcy9yaXZlcnZpZXcvcmVsYXRlZHZpZGVvP3E9JWUzJTgyJWE4JWUzJTgzJTlhK0FMR1MlZTMlODMlOTAlZTMlODMlODMlZTMlODMlODEmcXM9biZzcD0tMSZscT0wJnBxPSVlMyU4MiVhOCVlMyU4MyU5YSthbGdzJWUzJTgzJTkwJWUzJTgzJTgzJWUzJTgzJTgxJnNjPTEtMTAmc2s9JmN2aWQ9MDYzQ0RCRDI4NkZGNDI0MkFGNjM3NzgxQTY4NDMzMzgmZ2hzaD0wJmdoYWNjPTAmZ2hwbD0mYWRsdD1zdHJpY3QmdG9Xd3c9MSZyZWRpZz02MDhCQ0Q2QUY2Mzc0QzhCQkRFNTBBODYwNUEyMTQ2QSZydT0lMmZzZWFyY2glM2ZxJTNkJTI1RTMlMjU4MiUyNUE4JTI1RTMlMjU4MyUyNTlBJTJiQUxHUyUyNUUzJTI1ODMlMjU5MCUyNUUzJTI1ODMlMjU4MyUyNUUzJTI1ODMlMjU4MSUyNnFzJTNkbiUyNmZvcm0lM2RRQlJFJTI2c3AlM2QtMSUyNmxxJTNkMCUyNnBxJTNkJTI1RTMlMjU4MiUyNUE4JTI1RTMlMjU4MyUyNTlBJTJiYWxncyUyNUUzJTI1ODMlMjU5MCUyNUUzJTI1ODMlMjU4MyUyNUUzJTI1ODMlMjU4MSUyNnNjJTNkMS0xMCUyNnNrJTNkJTI2Y3ZpZCUzZDA2M0NEQkQyODZGRjQyNDJBRjYzNzc4MUE2ODQzMzM4JTI2Z2hzaCUzZDAlMjZnaGFjYyUzZDAlMjZnaHBsJTNkJTI2YWRsdCUzZHN0cmljdCUyNnRvV3d3JTNkMSUyNnJlZGlnJTNkNjA4QkNENkFGNjM3NEM4QkJERTUwQTg2MDVBMjE0NkEmbW1zY249dndyYyZtaWQ9NUVGMUIzRUM2QTVBMjNGNTE2NjI1RUYxQjNFQzZBNUEyM0Y1MTY2MiZGT1JNPVdSVk9SQw&ntb=1
        return Inertia::render('Inertia/Create');
    }

    




    public function show($id)
    {
        return Inertia::render('Inertia/Show', [
            'id' => $id,
            'blog' => InertiaTest::findOrFail($id)
        ]);
    }

    public function store(Request $request){
        
        dd($request);

        $request->validate([ 
            'title' => ['required', 'max:20'], 
            'content' => ['required'], 
            ]);

        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        return to_route('inertia.index')->with([
            'message' => '登録しました'
        ]);

    }

    public function delete($id)
    {
        $book = InertiaTest::findOrFail($id);
        $book->delete();

        return to_route('inertia.index')
        ->with([
            'message' => '削除しました。'
        ]);

    }



    public function test()
    {
       //クエリビルダ　ORマッパー      
        return view('tailwind.test');
    }

    public function background()
    {
       //クエリビルダ　ORマッパー      
        return view('inertia.index');
    }

    public function upload()
    {
       //クエリビルダ　ORマッパー      
        return view('tailwind.create');
    }

    public function rank()
    {
       //クエリビルダ　ORマッパー      
        return view('tailwind.rank');
    }

    public function mypage()
    {
       //クエリビルダ　ORマッパー      
        return view('tailwind.mypage');
    }
    public function top()
    {
       //クエリビルダ　ORマッパー      
        return view('tailwind.index');
    }
}
