<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Models\Flight;
use Psr\Log\LogLevel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories_query = Category::query();
        $name = $request->get('name');
        if (!empty($name)) {
            $categories_query->where('name', 'like', "%" . $name . "%");
        }
        $categories = $categories_query->paginate(5);
        return view('admin.category.list')->with([
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
        $data = $request->only(['name']);
        $validated = $request->validate([
                'name' => 'required|unique:categories|min:5|max:255',
            ]);
       
        if ($data) {
            Category::create([
                'name' => $data['name']
            ]);
            $request->session()->flash('success', 'tạo mới thành công!');
            return redirect()->action([CategoryController::class, 'index']);
        } else {
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
        $category = Category::find($id);
        return view('admin.category.detail')->with([
            'category' => $category
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
        $category = DB::table('categories')->find($id);
        return view('admin.category.edit')->with([
            'category' => $category
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
        $data = $request->only(['name']);
        $validated = $request->validate([
            'name' => 'required|unique:categories|min:10|max:255',
        ]);
        if ($data) {
            $category = Category::find($id);
            $category->name = $data['name'];
            $category->save();
            $request->session()->flash('success', 'Cập nhật thành công!');
            return redirect()->action([CategoryController::class, 'index']);
        } else {
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
            
            Category::destroy($id);
            $request->session()->flash('success', 'Xóa thành công!');
            return redirect()->route('admin.category.index');
    }
    
}
