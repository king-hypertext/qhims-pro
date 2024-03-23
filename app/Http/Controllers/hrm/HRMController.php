<?php

namespace App\Http\Controllers\hrm;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewStaffRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HRMController extends Controller
{
    
    public function __construct() {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
    }
    public function index()
    {
        return view('hrm.index', ['title' => 'HRM - MANAGE STAFF']);
    }

    public function addStaffForm(): View
    {
        return view('hrm.add_staff', ['title' => 'ADD NEW STAFF']);
    }
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
    public function store(AddNewStaffRequest $request)
    {
        //
        // $request->dd();
        $request->validated();
        if ($request->has('email')) {
            $request->validate(['email' => 'email|unique:users,email']);
        };
        $user = new User();
        $user->staff_id = $request->staff_id;
        $user->role = $request->role;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return back()->with('success', 'New Staff Added');

        // $staff = new Sta 
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
