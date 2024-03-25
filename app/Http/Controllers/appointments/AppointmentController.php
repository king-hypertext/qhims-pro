<?php

namespace App\Http\Controllers\appointments;

use App\Http\Controllers\Controller;
use App\Models\EmergencyContact;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        return view('appointment.index', ['title' => 'ALL APPIONTMENTD']);
    }
    public function create(Request $request)
    {
        // $request->dd();
        $patient = Patient::find($request->patient_id);
        abort_if($patient == null, 422, "Error occured fetching patient data, Contact your IT administrator. \n this might be caused by a change in url");
        $e_contact = EmergencyContact::find(EmergencyContact::query()->where('patient_id', '=', $patient->id)->value('id'));
        return view('appointment.schedule', ['title' => 'SCHEDULE APPOINTMENT', 'patient' => $patient, 'e_contact' => $e_contact]);
    }
    public function show(Request $request)
    {
        // $request->dd();
        return response()->json([
            'success' => true,
            'url' => route(
                'appointment.schedule',
                [
                    'patient_id' => $request->patient_id,
                    'time' => $request->app_time,
                    'date' => $request->app_date,
                    'visit_no' => $request->visit_no
                ]
            )
        ]);
    }
}
