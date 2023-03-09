<?php

namespace App\Http\Controllers\Shop;

use  App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Displays the dashboard page to the admin
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('shop.dashboard');
    }

    /**
     * Displays the profile page to the admin
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::guard('web')->user();

        return view('shop.profile', compact('web'));
    }

    /**
     * Updates admin profile details
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profileUpdate()
    {
        $validatedData = request()->validate(Admin::profileValidationRules());

        $user = Auth::guard('web')->user();

        $user->update($validatedData);

        return back()->with(['type' => 'success', 'message' => 'Profile updated successfully']);
    }

    /**
     * Updates admin password
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function passwordUpdate()
    {
        $validatedData = request()->validate(Admin::passwordValidationRules());

        $user = Auth::guard('web')->user();

        if (Hash::check(request('current_password'), $user->password)) {
            $user->password = bcrypt(request('password'));
            $user->save();

            return back()->with(['type' => 'success', 'message' => 'Password updated successfully']);
        }

        return back()->with(['type' => 'error', 'message' => 'Incorrect current password']);
    }
}
