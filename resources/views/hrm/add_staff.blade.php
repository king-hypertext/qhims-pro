@extends('layout.page')
@section('content')
    <div class="container-fluid mt-4">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <a class="nav-link" href="{{ route('hrm.index') }}" onclick="window.open(this.href, '_self')"
                        id="nav-home-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-home">
                        manage staff
                    </a>
                    <a class="nav-link active " href="{{ route('staff.add-new') }}" id="nav-add-staff-tab"
                        data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-add-staff"
                        aria-selected="false" tabindex="-1" aria-selected="true">
                        Add Staff
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div>
                        <!-- An unexamined life is not worth living. - Socrates -->
                    </div>
                    <div class="card border-0  my-5">
                        <div class="card-body">
                            <h5 class="h4 text-capitalize fw-semibold text-md-center ">add new staff</h5>
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
                            <form id="add-staff" action="{{ route('staff.add-new.store') }}" method="POST" class="my-3">
                                @csrf
                                <input required type="hidden" name="password" id="password" class="form-control active"
                                    value="123456" />
                                <div class="row g-2 ">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-outline mb-4">
                                            <input required type="text" name="staff_id" id="staff_id"
                                                class="form-control active form-control-lg"
                                                value="{{ generateUserID() }}" />
                                            <label class="form-label" for="staff_id">Staff ID
                                                <span class="text-danger" title="Required">*</span>
                                            </label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input required type="text" autofocus name="first_name" id="first_name"
                                                class="form-control form-control-lg" value="{{ @old('first_name') }}" />
                                            <label class="form-label" for="first_name">First Name
                                                <span class="text-danger" title="Required">*</span>
                                            </label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" autofocus name="mid_name" id="mid_name"
                                                class="form-control form-control-lg" value="{{ @old('mid_name') }}" />
                                            <label class="form-label" for="mid_name">Middle Name</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input required type="text" autofocus name="last_name" id="last_name"
                                                class="form-control form-control-lg" value="{{ @old('last_name') }}" />
                                            <label class="form-label" for="last_name">Last Name
                                                <span class="text-danger" title="Required">*</span>
                                            </label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input required type="date" autofocus name="date_of_birth" id="date_of_birth"
                                                class="form-control form-control-lg active" max="{{ Date('Y-m-d') }}"
                                                value="{{ @old('date_of_birth') }}" />
                                            <label class="form-label" for="date_of_birth">Date of Birth
                                                <span class="text-danger" title="Required">*</span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-outline mb-4">
                                            <select required name="role" id="role"
                                                style="border-radius: 4px; font-size: 14pt"
                                                class="form-select form-select-lg ">
                                                <option value="">Selct Role...*
                                                </option>
                                                <option value="admin">Admin</option>
                                                <option value="doctor">Doctor</option>
                                                <option value="record_officer">Record officer</option>
                                                <option value="nurse">Nurse</option>
                                                <option value="midwife">Midwife</option>
                                                <option value="cashier">Cashier</option>
                                                <option value="pharmacist">Pharmacist</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input required type="text" autofocus name="address" id="address"
                                                class="form-control form-control-lg " value="{{ @old('address') }}" />
                                            <label class="form-label" for="address">Address
                                                <span class="text-danger" title="Required">*</span>
                                            </label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <select required name="gender" id="gender"
                                                style="border-radius: 4px; font-size: 14pt"
                                                class="form-select form-select-lg ">
                                                <option value="">Select gender...*
                                                </option>
                                                <option value="male">male</option>
                                                <option value="female">female</option>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" autofocus name="phone_number" id="phone_number"
                                                class="form-control form-control-lg "
                                                value="{{ @old('phone_number') }}" />
                                            <label class="form-label" for="religion">Phone Number
                                                <span class="text-danger" title="Required">*</span>
                                            </label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="email" autofocus name="email" id="email"
                                                class="form-control form-control-lg " value="{{ @old('email') }}" />
                                            <label class="form-label" for="email">Email
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <h6 class="h6">Miscillaneous (optional)</h6>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" autofocus name="father_name" id="father_name"
                                                class="form-control form-control-lg "
                                                value="{{ @old('father_name') }}" />
                                            <label class="form-label" for="father_name">Father's Name(s)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" autofocus name="mother_name" id="mother_name"
                                                class="form-control form-control-lg "
                                                value="{{ @old('mother_name') }}" />
                                            <label class="form-label" for="mother_name">Mother's Name(s)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary ">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('form#add-staff').on('submit', (e) => {
            // e.preventDefault();
            $('#add-staff :submit').html('<span id="save-icon" class="fas fa-spinner fa-spin"></span>' +
                ' Saving...').addClass('disabled');
            return 1;
        });
    </script>
@endsection
