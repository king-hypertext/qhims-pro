<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewPatientRequest;
use App\Models\EmergencyContact;
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
     * 
     */
    public function store(AddNewPatientRequest $request)
    {
        $request->validated();
        $request->dd();
        $patient = new Patient();
        $patient->id = $request->id;
        $patient->first_name = $request->first_name;
        $patient->mid_name = $request->mid_name;
        $patient->last_name = $request->last_name;
        $patient->address = $request->adddress;
        $patient->phone_number = $request->phone;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->email = $request->email;
        $patient->gender = $request->gender;
        $patient->religion = $request->religion;
        $patient->blood_type = $request->blood_type;
        $patient->is_staff = $request->is_staff;
        $patient->staff_id = $request->staff_id;
        $patient->save(); //save the data to the database
        $emergency_contact = new EmergencyContact();
        $emergency_contact->patient_id = $request->id;
        $emergency_contact->first_name = $request->e_firstname;
        $emergency_contact->last_name = $request->e_last_name;
        $emergency_contact->address = $request->e_address;
        $emergency_contact->relationship = $request->relation;
        $emergency_contact->phone_number = $request->e_phone;
        $emergency_contact->save();//save patient emergency contact in the databse

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
