<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::query()->paginate(5);
        return view('admin.menu.list')->with([
            'menus' => $menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'url', 'status', 'sort']);
        if ($data) {
            try {
                $menu = new Menu();
                $menu->name = $data['name'];
                $menu->url = $data['url'];
                $menu->status = $data['status'];
                $menu->sort = 1;
                $menu->save();
            } catch (\Exception $ex) {
                Log::error('MenuController@store Error:' . $ex->getMessage());
            }
            $request->session()->flash('success', 'Tạo mới thành công!');
            return redirect()->action([MenuController::class, 'index']);
        } else {
            $request->session()->flash('error', 'Tạo mới thất bại!');
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
        $menu = Menu::find($id);
        return view('admin.menu.edit')->with([
            'menu' => $menu
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
        $data = $request->only(['name', 'url', 'status', 'sort']);
        $menu = Menu::find($id);
        if ($data) {
            try {
                $menu->name = $data['name'];
                $menu->url = $data['url'];
                $menu->status = $data['status'];
                $menu->sort = 1;
                $menu->save();
            } catch (\Exception $ex) {
                Log::error('MenuController@store Error:' . $ex->getMessage());
            }
            $request->session()->flash('success', 'Cập nhật thành công!');
            return redirect()->action([MenuController::class, 'index']);
        } else {
            $request->session()->flash('error', 'Tạo mới thất bại!');
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
        $menu = Menu::find($id);
        if ($menu->delete()==true) {
            $request->session()->flash('success', 'Xoá thành công!');
            $menu->delete();
            return redirect()->route('admin.menu.index');
        }
    }
}
