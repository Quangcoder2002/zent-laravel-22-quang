<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate; 


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->cannot('view-user')){
            return abort(403);
        }
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
        if (Auth::user()->cannot('create-user')){
            return abort(403);
        }
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
        if (Auth::user()->cannot('create-user')){
            return abort(403);
        }
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
        if (Auth::user()->cannot('view-user')){
            return abort(403);
        }
        return view('admin.user.detail')->with([
            'user' => $user
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
        $roles = Role::get();
        if (Auth::user()->cannot('update-user')){
            return abort(403);
        }
        return view('admin.user.edit')->with([
            'user'=>$user,
            'roles' => $roles
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->only(['name','email','phone','address']);    
        $user = User::find($id);
        if (Auth::user()->cannot('update-user')){
            return abort(403);
        }
        $roles = $request->get('roles');
        if ($data) {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $path = null;
            if($request->hasFile('avatar')){
                $disk = 'public';
                $path = $request->file('avatar')->store('avatars', $disk);
                $user->disk = $disk;               
            }
            DB::table('user_infos')->where('user_id',$id)->update([
                'phone'=> $data['phone'],
                'address'=> $data['address'],
                'avatar' => $path,
            ]);
            $user->save();
            $user->roles()->sync($roles);
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
        $user = User::find($id);
        if (Auth::user()->cannot('delete-user')){
            return abort(403);
        }
        if (request()->get('list_delete') == 'active') {
            $user = User::onlyTrashed()->where('id', $id)->first();
            $user->restore();
            return redirect()->route('admin.users.index',['list_delete' => 'active']);
        }else{
            User::destroy($id);
            return redirect()->route('admin.users.index');
        }
    }

    public function loginWithUser($id){
         Auth::loginUsingId($id);
         return redirect()->route('admin.dashboard.index');
    }
}
