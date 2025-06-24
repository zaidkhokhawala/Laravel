<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function register()
    {
        return view('website.auth.register');
    }

    public function login()
    {
        return view('website.auth.login');
    }


    public function cheklogin(Request $request)
    {

        // Check email
        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            Alert::error('Error', 'Email not registered');
            return redirect()->route('register');
        }

        // Check password
        if (!Hash::check($request->password, $admin->password)) {
            Alert::error('Error', 'Wrong password');
            return redirect()->back();
        }

        // Set session
        Session::put('admin_id', $admin->id);
        Session::put('admin_name', $admin->name);

        Alert::success('Success', 'Login successful');
        return redirect()->route('index'); // change this route to your homepage
    }


    public function logout()
    {
        // Session clear karna
        Session::flush(); // sabhi session clear karega
        Alert::success('Success', 'Logged out successfully');
         return redirect()->route('login');
    }

    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = Admin::created([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Alert::success('Success', 'register successfull');
        return redirect()->route('login');


        // // Validation hata rahe ho abhi
        // $admin = Admin::create([
        //     'name'     => $request->name,
        //     'email'    => $request->email,
        //     'password' => Hash::make($request->password), // encrypted password
        // ]);

        // Alert::success('Success', 'Registered Successfully');

        // return redirect()->route('login'); // login ka route hona chahiye
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
