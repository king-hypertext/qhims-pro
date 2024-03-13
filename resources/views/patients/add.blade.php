@extends('layout.page')
@section('content')
<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
    <div class="contsiner-fluid mt-4">
        <h5 class="h4 text-capitalize ">add new patient</h5>
        <form id="add-new-patient" action="#" method="POST">
            @csrf
            <div class="row mb-2">
                <label for="first_name" class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="first_name">
                </div>
            </div>
            <div class="row mb-2">
                <label for="mid_name" class="col-sm-3 col-form-label">Middle Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="mid_name">
                </div>
            </div>
            <div class="row mb-2">
                <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="last_name">
                </div>
            </div>
            <div class="row mb-2">
                <label for="address" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="address">
                </div>
            </div>
            <div class="row mb-2">
                <label for="phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-9">
                    <input type="tel" class="form-control" id="phone_number">
                </div>
            </div>
            <div class="row mb-2">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row mb-2">
                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-9">
                    <select class="form-select" id="gender">
                        <option sele cted>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <label for="religion" class="col-sm-3 col-form-label">Religion</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="religion">
                </div>
            </div>
            <div class="row mb-2">
                <label for="blood_type" class="col-sm-3 col-form-label">Blood Type</label>
                <div class="col-sm-9">
                    <select class="form-select" id="blood_type">
                        <option sele cted>Choose...</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <label for="staff_id" class="col-sm-3 col-form-label">Staff ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="staff_id">
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_staff">
                <div class="row mb-2">
                    <label class="form-check-label" for="is_staff">Is Staff</label>
                    <div class="col-sm-9">
                    </div>
                </div><button type="submit
            " class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
