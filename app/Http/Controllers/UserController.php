<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'type' => 'required|string',
                'password' => 'required|string|min:8|confirmed',
            ],
            [
                'name.required' => 'وارد کردن نام الزامی است',
                'email.required' => 'وارد کردن ایمیل الزامی است',
                'email.email' => 'ایمیل وارد شده معتبر نیست',
                'email.unique' => 'این ایمیل قبلا ثبت شده است',
                'type.required' => 'وارد کردن نوع کاربر الزامی است',
                'password.required' => 'وارد کردن رمز عبور الزامی است',
                'password.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد',
                'password.confirmed' => 'رمز عبور و تکرار آن باید یکسان باشد',
            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.create')->with('status', 'account-created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'type' => 'required|in:مدیر مالی,خیاط,مدیر سامانه',
                'password' => 'nullable|string|min:8|confirmed',
            ],
            [
                'name.required' => 'وارد کردن نام الزامی است',
                'email.required' => 'وارد کردن ایمیل الزامی است',
                'email.email' => 'ایمیل وارد شده معتبر نیست',
                'email.unique' => 'این ایمیل قبلا ثبت شده است',
                'type.required' => 'وارد کردن نوع کاربر الزامی است',
                'password.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد',
                'password.confirmed' => 'رمز عبور و تکرار آن باید یکسان باشد',
            ]
        );

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->route('users.edit', $user)->with('status', 'account-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
