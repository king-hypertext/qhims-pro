<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewPatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
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

    public function createNewPatient()
    {
        return view('patients.add', ['tittle' => 'ADD NEW PATIENT']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewPatientRequest $request)
    {
        $request->validated();
        Patient::insert([]);
        return back()->with('success', 'Patient Added');
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
