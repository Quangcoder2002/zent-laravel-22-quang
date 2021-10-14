<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Model\Flight;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;    

class PostController extends Controller
{   
    /**
     * Create the controller instance.
     *
     * @return void
     */
    // public function __construct()
    //  {
    //      $this->authorizeResource(Post::class , 'post');
    //  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts_query = Post::query();
        $title = $request->get('title');
        if(!empty($title)){
            $posts_query->where('title', 'like', "%" . $title . "%");
        }
        $status = $request->get('status');
        if($status !== null){
            $posts_query->where('status', $status);
        }
        $posts = $posts_query->paginate(5);
        return view('admin.post.list')->with([
            'posts'=> $posts
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create' , Post::class);
        $categories = Category::select('id','name')->get();
        $tags = Tag::get();
        if (Auth::user()->cannot('create-post')){
            return abort(403);
        }
        return view('admin.post.create')->with([
            'categories'=>$categories,
            'tags' => $tags
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        log::info('buoc 1');
        $data = $request->only(['title','content','category_id','status']);
        $tags = $request->get('tag');
        log::info('buoc 2');
        if (Auth::user()->cannot('create-post')){
            return abort(403);
        }
        //$this->authorize('create' , Post::class);
        if ($data) {
            try{
                 $post = new Post();
                 $post->title = $data['title'];
                 $post->content = $data['content'];
                 $post->status = $data['status'];
                 $post->category_id = $data['category_id'];
                 $post->user_created_id = auth()->user()->id;
                 $post->user_updated_id = 1;
                 $post->save();
                 $post->tags()->attach($tags);
            }catch(\Exception $ex){
                Log::error('PostController@store Error:'.$ex->getMessage());
            }
            return redirect()->action([PostController::class, 'index']);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        // $this->authorize('view' , $post);
        return view('admin.post.detail')->with([
            'post'=>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        $tags = Tag::get();
        $categories = Category::all();
        if (Auth::user()->cannot('update-post')){
            return abort(403);
        }
        //$this->authorize('update' , $post);
        return view('admin.post.edit')->with([
            'post'=>$post,
            'categories'=>$categories,
            'tags' => $tags
        ]);
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
        $data = $request->only(['title','content','category_id','status']);
        $tags = $request->get('tags');
        $post = Post::find($id);
        if (Auth::user()->cannot('update-post')){
            return abort(403);
        }
        // $this->authorize('create' , $post);
        // if (!Gate::allows('update-post', $post)) {
        //    abort(403);
        // }
        // if ($request->user()->cannot('update', $post)) {
        //     abort(403);
        // }
        if ($data) {
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->status = $data['status'];
            $post->category_id = $data['category_id'];
            $post->user_updated_id = 1;
            $post->save();
            $post->tags()->sync($tags);
            return redirect()->action([PostController::class, 'index']);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        if (Auth::user()->cannot('delete-post')){
            return abort(403);
        }
        // $this->authorize('create' , Post::class);
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
