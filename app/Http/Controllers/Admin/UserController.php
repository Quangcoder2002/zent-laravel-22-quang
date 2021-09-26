<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.user.list')->with([
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
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->only(['name','phone','address','email','status','avatar']);
        if ($data) {
            DB::table('users')->insert([
                'name'=>$data['name'],
                'phone'=>$data['phone'],
                'address'=>$data['address'],
                'email'=>$data['email'],
                'avatar'=>$data['avatar'],
                'status'=>$data['status'],
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            return redirect()->action([UserController::class, 'index']);
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
        $user = DB::table('users')->find($id);
        return view('admin.user.detail')->with([
            'user'=>$user
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
        $user = DB::table('users')->find($id);
        return view('admin.user.edit')->with([
            'user'=>$user
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
        $data =$request->only(['name','phone','address','email']);
        if ($data) {
            DB::table('users')->where('id',$id)->update([
                'name'=>$data['name'],
                'phone'=>$data['phone'],
                'address'=>$data['address'],
                'email'=>$data['email'],
                'updated_at'=>now()
            ]);
            return redirect()->action([UserController::class, 'index']);
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
        //
    }
}
