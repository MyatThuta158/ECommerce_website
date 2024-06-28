<?php

namespace App\Http\Controllers;

use App\Models\Manufacturers;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manu=Manufacturers::all();
        return response()->json($manu);
    }

    // // Show all manufacturers data in table
    // public function manGet(){
    //     $manu=Manufacturers::all();
    //     return response()->json($manu);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'ManufacturerName' => 'required|string',
            'ManufacturerEmail' => 'required|string',
            'ManufacturerPhoneNo' => 'required|string',
            'ManufacturerAddress' => 'required|string',
        ]);

        $manufacturer = Manufacturers::create([
            'ManufacturerName' => $validate['ManufacturerName'],
            'ManufacturerEmail' => $validate['ManufacturerEmail'],
            'ManufacturerPhoneNo' => $validate['ManufacturerPhoneNo'],
            'ManufacturerAddress' => $validate['ManufacturerAddress'],
        ]);

        // Optionally, you can return a response or redirect
        return response()->json(['success' => true, 'manufacturer' => $manufacturer], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manuLists=Manufacturers::where('ManufacturerId',$id)->first();
        // dd($manuLists); For testing purpose
        if ($manuLists) {
            return view('Manufacturers.Manufacturers',with('manuLists'));
        }else{
            
            abort(403,'Unauthorized Access');
        }
        
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
