<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::query()->paginate(5);
        $permissions = Permission::get();
        return view('admin.role.list')->with([
            'permissions' => $permissions,
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('admin.role.create')->with([
            'permissions' => $permissions
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
        $data = $request->only(['name']);
        $permissions = $request->get('permission');
        // dd($permissions);
        if ($data) {
            try{
                 $role = new Role();
                 $role->name = $data['name'];
                 $role->created_at = now();
                 $role->updated_at = now();
                 $role->save();
                 $role->permissions()->attach($permissions);
            }catch(\Exception $ex){
                Log::error('RoleController@store Error:'.$ex->getMessage());
            }
            $request->session()->flash('success', 'Tạo mới thành công!');
            return redirect()->action([RoleController::class, 'index']);
        }else{
            $request->session()->flash('error', 'Xóa thành công!');
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
        $permissions = Permission::get();
        $role = Role::find($id);
        return view('admin.role.edit')->with([
            'permissions' => $permissions,
            'role' => $role
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
        $role = Role::find($id);
        $data = $request->only(['name']);
        $permissions = $request->get('permissions');
        if ($data) {
            $role->name = $data['name'];
            $role->save();
            $role->permissions()->sync($permissions);
            $request->session()->flash('success', 'Cập nhật thành công!');
            return redirect()->action([RoleController::class, 'index']);
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
        $role = Role::find($id);
        $role->delete();
        $request->session()->flash('success', 'Xóa thành công!');
        return redirect()->route('admin.role.index');
    }
}
