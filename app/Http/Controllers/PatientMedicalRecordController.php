<?php

namespace App\Http\Controllers;

use App\Models\PatientMedicalRecord;
use App\Http\Requests\StorePatientMedicalRecordRequest;
use App\Http\Requests\UpdatePatientMedicalRecordRequest;

class PatientMedicalRecordController extends Controller
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
    public function store(StorePatientMedicalRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PatientMedicalRecord $patientMedicalRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PatientMedicalRecord $patientMedicalRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientMedicalRecordRequest $request, PatientMedicalRecord $patientMedicalRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatientMedicalRecord $patientMedicalRecord)
    {
        //
    }
}
