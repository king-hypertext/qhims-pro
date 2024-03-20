@extends('layout.page')
@section('content')

    <div>
        <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    </div>
    {{-- @dd($patient) --}}
    <style type="text/css">
        @media (min-width: 768px) {

            .form-control,
            .form-select {
                max-width: 400px;
            }
        }
    </style>
    <div class="container-fluid mt-4">
        <h5 class="h4 text-capitalize fw-semibold">edit patient</h5>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">An Error Occured</h4>
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="update-patient" action="{{ route('patient.update-info', [$patient->id]) }}" method="POST" class="my-3">
            @method('PUT')
            @csrf
            <div class="row mb-2">
                <label for="patient_id" class="col-sm-3 col-form-label">Patient ID <span class="text-danger"
                        title="Required">*</span>
                </label>
                <div class="col-sm-9">
                    <input required readonly value="{{ $patient->id }}" type="text" class="form-control" id="patient_id"
                        name="id" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="first_name" class="col-sm-3 col-form-label">First Name <span class="text-danger"
                        title="Required">*</span>
                </label>
                <div class="col-sm-9">
                    <input required autofocus type="text" class="form-control" value="{{ $patient->first_name }}"
                        id="first_name" name="first_name" title="Patient first name is required" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="mid_name" class="col-sm-3 col-form-label">Middle Name </label>
                <div class="col-sm-9">
                    <input value="{{ $patient->mid_name }}" type="text" class="form-control" id="mid_name"
                        name="mid_name" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="last_name" class="col-sm-3 col-form-label">Last Name <span class="text-danger"
                        title="Required">*</span>
                </label>
                <div class="col-sm-9">
                    <input value="{{ $patient->last_name }}" required type="text" class="form-control" id="last_name"
                        value="{{ @old('last_name') }}" name="last_name" />
                </div>
            </div>

            <div class="row mb-2">
                <label for="phone_number" class="col-sm-3 col-form-label">Phone Number <span class="text-danger"
                        title="Required">*</span></label>
                <div class="col-sm-9">
                    <input value="{{ $patient->phone_number }}" required type="tel" class="form-control"
                        id="phone_number" name="phone_number" />
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-sm-3 col-form-label" for="date_of_birth">
                    Date of Birth
                    <span class="text-danger" title="Required">*</span>
                </label>
                <div class="col-sm-9">
                    <input value="{{ $patient->date_of_birth }}" required type="text" class="form-control datepicker"
                        id="date_of_birth" name="date_of_birth" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" value="{{ $patient->email }}" class="form-control" id="email"
                        name="email" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="gender" class="col-sm-3 col-form-label">Gender <span class="text-danger"
                        title="Required">*</span></label>
                <div class="col-sm-9">
                    <select required class="form-select" id="gender" name="gender">
                        <option value="" selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <label for="religion" class="col-sm-3 col-form-label">Religion</label>
                <div class="col-sm-9">
                    <input type="text" value="{{ $patient->religion }}" class="form-control" id="religion"
                        name="religion" />
                </div>
            </div>
            <div class="row mb-2">
                <label for="blood_group" class="col-sm-3 col-form-label">Blood Type</label>
                <div class="col-sm-9">
                    <select class="form-select" id="blood_group" name="blood_group">
                        <option value="" selected>Choose Blood Group...</option>
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
                <label for="address" class="col-sm-3 col-form-label">Address <span class="text-danger"
                        title="Required">*</span></label>
                <div class="col-sm-9">
                    <textarea title="Parent residential address" required class="form-control" name="address" id="address"
                        rows="3"></textarea>
                </div>
            </div>
            <div class="divider text-start" style="max-width: 650px">
                <div class="divider-text">
                    <h6 class="h6">Emergency Contact</h6>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="e_firstname">First Name <span class="text-danger"
                        title="Required">*</span></label>
                <div class="col-md-9 col-sm-8">
                    <input required type="text" value="{{ $e_contact->first_name }}" class="form-control"
                        id="e_firstname" name="e_firstname">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="e_lastname">Last Name <span class="text-danger"
                        title="Required">*</span></label>
                <div class="col-md-9 col-sm-8">
                    <input required type="text" value="{{ $e_contact->last_name }}" class="form-control"
                        id="e_lastname" name="e_lastname">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="phone">Phone Number <span class="text-danger"
                        title="Required">*</span>
                </label>
                <div class="col-md-9 col-sm-8">
                    <input required type="tel" value="{{ $e_contact->phone_number }}" onpaste="return false"
                        pattern="\d*" maxlength="12" title="Please enter only numbers [0-9]" class="form-control"
                        id="e_phone" name="e_phone" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="e_relation">Relationship <span class="text-danger"
                        title="Required">*</span>
                </label>
                <div class="col-md-9 col-sm-9">
                    <select required name="e_relation" id="e_relation" class="form-select text-uppercase ">
                        <option value="" selected>Choose...</option>
                        <option value="father">father</option>
                        <option value="mother">mother</option>
                        <option value="son">son</option>
                        <option value="daughter">daughter</option>
                        <option value="sister">sister</option>
                        <option value="brother">brother</option>
                        <option value="friend">friend</option>
                        <option value="other">other</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" for="e_address">Residential Address <span class="text-danger"
                        title="Required">*</span>
                </label>
                <div class="col-md-9 col-sm-8">
                    <textarea required class="form-control" id="e_address" name="e_address" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <span class="col-sm-3 col-form-label" for="is_staff">Is Staff</span>
                <div class="col-sm-9 mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-radio" type="radio" name="is_staff" id="staff_true"
                            value="1" />
                        <label class="form-check-label user-select-none " for="staff_true">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-radio" type="radio" name="is_staff" id="staff_false" value="0"
                            checked />
                        <label class="form-check-label user-select-none " for="staff_false">NO</label>
                    </div>
                </div>
            </div>
            {{-- check if patient is staff --}}
            <div class="row mb-3">
                <label style="display: none" class="col-sm-3 col-form-label" for="staff_id">Enter Staff Id <span
                        class="text-danger" title="Required">*</span>
                </label>
                <div class="col-sm-9">
                    <input value="{{ $e_contact->staff_id }}" class="form-control" type="hidden" name="staff_id"
                        id="input_staff_id" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Update</button>
        </form>
    </div>
    <script type="text/javascript">
        $('textarea[name="e_address"]').val("{{ $e_contact->address }}");
        $('textarea[name="address"]').val("{{ $patient->address }}");
        $('select[name="blood_group"]').val("{{ $patient->blood_group }}");
        $('select[name="gender"]').val("{{ $patient->gender }}");
        $('select[name="e_relation"]').val("{{ $e_contact->relationship }}");
        $('form#update-patient').on('submit', () => {
            $('#update-patient :submit').html('<span id="save-icon" class="fas fa-spinner fa-spin"></span>' +
                ' Saving...').addClass('disabled');
            return true;
        });
        var label = $('label[for="staff_id"]');
        $('[name="is_staff"]').change(e => {
            e = e.currentTarget.value;
            if (e == 1) {
                $('#input_staff_id').attr('type', 'text');
                $('#input_staff_id').attr('required', true);
                label.show();
                $('#input_staff_id').removeAttr('disabled');
            } else {
                label.hide();
                $('#input_staff_id').removeAttr('required');
                $('#input_staff_id').attr('type', 'hidden');
                $('#input_staff_id').attr('disabled', true);
            }
        })
    </script>
@endsection
