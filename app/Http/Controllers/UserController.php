<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->where('type','!=','admin');
        return view('Dashboard.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('Dashboard.pages.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findorfail($id);

        $user->type = $request->type;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $user = User::where('id', $id)->delete();
          return redirect()->route('users.index');
    }
    public function showsoft(){
        $users=User::onlyTrashed()->get();
        return view('Dashboard.pages.users.soft',compact('users'));
    }
    public function restor($id){
        $user=User::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
    public function finldelet($id){
        $user=User::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
}
