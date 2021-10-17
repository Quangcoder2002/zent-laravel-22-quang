<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::where('status', Post::STATUS_PUBLIC)->orderBy('created_at', 'desc')->paginate(6);
        return view('client.blog')->with([
            'posts' => $posts
        ]);
    }
    public function category(Request $request)
    {
        if ($request->only(['cate']) == null) {
            $cate = 1;
        }else{
            $cate = $request->only(['cate']);
        }
        $categories = Category::get();
        $posts = Post::where('status', Post::STATUS_PUBLIC)->where('category_id', $cate)->orderBy('created_at', 'desc')->paginate(6);
        return view('client.categories-post')->with([
            'posts' => $posts,
            'categories' => $categories
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $post = Post::find($id);
        $tags = Tag::get();
        return view('client.blog-single-post')->with([
            'post' => $post,
            'tags' => $tags
        ]);
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
}
