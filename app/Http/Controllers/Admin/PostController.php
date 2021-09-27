<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts_query = DB::table('posts');
        $title = $request->get('title');
        if(!empty($title)){
            $posts_query->where('title', 'like', "%" . $title . "%");
        }
        $status = $request->get('status');
        if($status !== null){
            $posts_query->where('status', $status);
        }
        $posts = $posts_query->get();
        $categories = DB::table('categories')->get();
        $users = DB::table('users')->select('name','id')->get();
        return view('admin.post.list')->with([
            'posts'=> $posts,
            'categories'=>$categories,
            'users'=> $users
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=DB::table('categories')->select('id','name')->get();
        return view('admin.post.create')->with([
            'categories'=>$categories
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
        log::info('buoc 2');
        if ($data) {
            try{
                DB::table('posts')->insert([
                    'title'=>$data['title'],
                    'slug'=>Str::slug($data['title']),
                    'content'=>$data['content'],
                    'status'=>$data['status'],
                    'category_id'=>$data['category_id'],
                    'user_created_id'=>1,
                    'user_updated_id'=>1,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
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
    public function show($id)
    {
        $post = DB::table('posts')->find($id);
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
    public function edit($id)
    {
        $post = DB::table('posts')->find($id);
        $categories = DB::table('categories')->get();
        return view('admin.post.edit')->with([
            'post'=>$post,
            'categories'=>$categories
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
        $data =$request->only(['title','content','category_id','status']);
        if ($data) {
            DB::table('posts')->where('id',$id)->update([
                'title'=>$data['title'],
                'slug'=>Str::slug($data['title']),
                'content'=>$data['content'],
                'status'=>$data['status'],
                'category_id'=>$data['category_id'],
                'user_updated_id'=>1,
                'updated_at'=>now()
            ]);
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
    public function destroy($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('admin.post.index');
    }
}
