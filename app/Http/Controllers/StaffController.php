<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'StaffName' => 'required|string',
            'StaffEmail' => 'required|string|email|unique:Staffs',
            'StaffPassword' => 'required|string|min:6',
            'StaffPhoneNo' => 'required|string',
        ]);

        
           $validated['StaffPassword'] = Hash::make($validated['StaffPassword']);
    
            $staff = Staffs::create($validated);
        
            return redirect()->back()->with('success','Register Successful');
       
        
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
