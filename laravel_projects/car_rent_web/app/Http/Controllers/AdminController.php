<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{


    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function loginCheck(Request $request)
    {



        // Get admin by email
        $admin = DB::table('admins')->where('email', $request->email)->first();

        if ($admin) {
            // Check password using Hash::check()
            if (Hash::check($request->password, $admin->password)) {
                // ✅ Password matched
                 session([
            'admin_id' => $admin->id,
            'admin_username' => $admin->username, // store this
        ]);
               
        
  Alert::success('success', 'Login successful.');
    return redirect()->route('admin_index');



      
            } else {
                // ❌ Password incorrect
                return back()->with('error', 'Incorrect password');
            }
        } else {
            // ❌ Email not found
            return back()->with('error', 'Email not registered');
        }
    }






 public function destroy(Request $request)
    {

    $request->session()->forget('admin_id');
    $request->session()->forget('admin_username');

    // Redirect to login page after logout


// Flash success message to session
    Alert::success('Success', 'Logged out successfully.');

    // Redirect with message
    return redirect()->route('admin_login');


    }











    /**
     * Display a listing of the resource.
     */
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   
}
