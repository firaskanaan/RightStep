<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    use PasswordValidationRules;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        return view('dashboard.pages.user.showUsers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.user.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = $request->validate([
            "name" => ['required', 'max:255'],
            "password" =>  $this->passwordRules(),
            "email" => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);
        $validations['password']=Hash::make($request->password);
        $user=User::create($validations);

        if($user){
            return back()->with('success','User saved.');
        }
        else
            return back()->with('error','Sorry, the User not added.');

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
        //
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
        $validations = $request->validate([
            "name" => ['required', 'max:255'],
            "email" => ['required', 'string', 'email', 'max:255']
        ]);
        $user=User::findOrFail($id);
        $data= $request->all();
        if(!empty($request->get('password')))
            $data['password']=Hash::make($request->get('password'));
        else
            unset($data['password']);

        $user->update($data);
        return back()->with('success','User edited.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return back()->with('success','User deleted.');
    }
}
