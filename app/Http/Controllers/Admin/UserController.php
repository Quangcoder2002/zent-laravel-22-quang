<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request->get('list_delete') == 'active') {
            $users_query = User::onlyTrashed();
        }else{
            $users_query = User::query();
        }
        $name = $request->get('name');
            if(!empty($name)){
                $users_query->where('name', 'like', "%" . $name . "%");
            }
        $email = $request->get('email');
        if(!empty($email)){
            $users_query->where('email', $email);
        }
        $users = $users_query->paginate(5);
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
           try{
                User::create([
                    'name' => $data['name'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'address'=> $data['address'],
                    'avatar' => $data['avatar'],
                    'status' => $data['status'],
                    'password' =>'123456',
                    'user_updated_id' => 1,
                ]);
             }catch(\Exception $ex){
                 Log::error('UserController@store Error:'.$ex->getMessage());
            }
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
        $user = User::find($id);
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
        $user = User::find($id);
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
        if (request()->get('list_delete') == 'active') {
            $user = User::onlyTrashed()->where('id', $id)->first();
            $user->restore();
            return redirect()->route('admin.users.index',['list_delete' => 'active']);
        }else{
            User::destroy($id);
            return redirect()->route('admin.users.index');
        }
    }
}
