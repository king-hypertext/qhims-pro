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
    public function index(Request $request)
    {
        // Patient::query()->
        // $request->dd();
        return view('patients.index', ['patients' => Patient::all(), 'title' => 'ALL PATIENTS']);
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
        return view('patients.add', ['title' => 'ADD NEW PATIENT']);
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(AddNewPatientRequest $request)
    {
        $request->validated();
        if ($request->is_staff == 1) {
            if (request()->has('staff_id')) {
                request()->validate([
                    "staff_id" => "required|exists:users,id|unique:patients,staff_id",
                ], [
                    "staff_id.exists" => "Staff ID ($request->staff_id) does not exists",
                    "staff_id.unique" => "The entered Staff ID ($request->staff_id) is already added"
                ]);
            }
        }
        // $request->dd();
        $patient = new Patient();

        $patient->id = strtoupper($request->id);
        $patient->first_name = strtoupper($request->first_name);
        $patient->mid_name = strtoupper($request->mid_name);
        $patient->last_name = strtoupper($request->last_name);
        $patient->address = strtoupper($request->address);
        $patient->phone_number = strtoupper($request->phone_number);
        $patient->date_of_birth = strtoupper($request->date_of_birth);
        $patient->email = $request->email;
        $patient->gender = strtoupper($request->gender);
        $patient->religion = strtoupper($request->religion);
        $patient->blood_group = strtoupper($request->blood_group);
        $patient->is_staff = strtoupper($request->is_staff);
        $patient->staff_id = strtoupper($request->staff_id);
        $patient->save(); //save the data to the database

        $emergency_contact = new EmergencyContact();
        $emergency_contact->patient_id = strtoupper($request->id);
        $emergency_contact->first_name = strtoupper($request->e_firstname);
        $emergency_contact->last_name = strtoupper($request->e_lastname);
        $emergency_contact->address = strtoupper($request->e_address);
        $emergency_contact->relationship = strtoupper($request->e_relation);
        $emergency_contact->phone_number = strtoupper($request->e_phone);
        $emergency_contact->save(); //save patient emergency contact in the databse

        return back()->with('success', 'Patient Added');
    }

    /**
     * Display the specified resource.
     */
    public function show($key)
    {
        // request()->dd();
        abort_unless(request('auth') == 1, 422, 'invalid/bad request');
        $data = Patient::query()->whereAny(['id', 'full_name', 'phone_number'], 'LIKE', "%$key%")->get();
        if ($data == null || $data->count() < 1) {
            return response()->json(['failed' => true, 'data' => 'No results found for ' . $key]);
        }
        return response()->json(['success' => true, 'data' => $data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view(
            'patients.edit',
            [
                'patient' => Patient::find($id),
                'e_contact' => EmergencyContact::query()->where('patient_id', '=', $id)->first(),
                'title' => 'EDIT PATIENT'
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddNewPatientRequest $request, string $id)
    {
        $request->validated();
        if ($request->is_staff == 1) {
            if (request()->has('staff_id')) {
                request()->validate([
                    "staff_id" => "required|exists:users,id|unique:patients,staff_id",
                ], [
                    "staff_id.exists" => "Staff ID ($request->staff_id) does not exists",
                    "staff_id.unique" => "The entered Staff ID ($request->staff_id) is already added"
                ]);
            }
        }
        $patient = Patient::find($id);
        $patient->first_name = strtoupper($request->first_name);
        $patient->mid_name = strtoupper($request->mid_name);
        $patient->last_name = strtoupper($request->last_name);
        $patient->address = strtoupper($request->address);
        $patient->phone_number = strtoupper($request->phone_number);
        $patient->date_of_birth = strtoupper($request->date_of_birth);
        $patient->email = $request->email;
        $patient->gender = strtoupper($request->gender);
        $patient->religion = strtoupper($request->religion);
        $patient->blood_group = strtoupper($request->blood_group);
        $patient->is_staff = strtoupper($request->is_staff);
        $patient->staff_id = strtoupper($request->staff_id);
        $patient->save(); //save the data to the database

        $emergency_contact = EmergencyContact::find(EmergencyContact::query()->where('patient_id', '=', $id)->value('id'));
        $emergency_contact->first_name = strtoupper($request->e_firstname);
        $emergency_contact->last_name = strtoupper($request->e_lastname);
        $emergency_contact->address = strtoupper($request->e_address);
        $emergency_contact->relationship = strtolower($request->e_relation);
        $emergency_contact->phone_number = strtoupper($request->e_phone);
        $emergency_contact->save(); //save patient emergency contact in the databse

        return back()->with('success', 'Patient Info Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
