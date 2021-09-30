<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Models\Flight;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('list_delete') == 'active') {
            $categories_query = Category::onlyTrashed();
        }else{
            $categories_query = Category::query();
        }
        $categories = $categories_query->paginate(5);
        return view('admin.category.list')->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->only(['name']);
        if ($data) {
            Category::create([
                'name'=>$data['name']
            ]);
            return redirect()->action([CategoryController::class, 'index']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('admin.category.edit')->with([
            'category'=>$category
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
        $data =$request->only(['name']);
        if ($data) {
            $category = Category::find($id);
            $category->name = $data['name'];
            $category->save();
            return redirect()->action([CategoryController::class, 'index']);
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
        if (request()->get('list_delete') == 'active') {
            $category = Category::onlyTrashed()->where('id', $id)->first();
            $category->restore();
            return redirect()->route('admin.category.index',['list_delete' => 'active']);
        }else{
            Category::destroy($id);
            return redirect()->route('admin.category.index');
        }
    }
}
