@extends('layout.page')
@section('content')
    <div>
        <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    </div>
    @php
        use Carbon\Carbon;
    @endphp
    <div class="container-fluid mt-4 ">
        <ul class="nav nav-pills bg-dark-subtle " id="myTabs">
            <li class="nav-item">
                <a role="button" class="text-capitalize m-0 border-0 rounded-0 nav-link active " href="#tab1"
                    data-toggle="tab">basic information</a>
            </li>
            <li class="nav-item">
                <a role="button" class="text-capitalize m-0 border-0 rounded-0 nav-link" href="#tab2"
                    data-toggle="tab">emergency contact
                </a>
            </li>
            <li class="nav-item">
                <a role="button" class="text-capitalize m-0 border-0 rounded-0 nav-link" href="#tab3" data-toggle="tab">
                    edit patient
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <div class="row">
                    <div class="col-sm-3">
                        <table class="table-borderless mt-2">
                            <tr>
                                <th>Patient OPD No:</th>
                            </tr>
                            <tr>
                                <th>Name:</th>
                            </tr>
                            <tr>
                                <th>Date of Birth: </th>
                            </tr>
                            <tr>
                                <th>
                                    Age:
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Address:
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Phone
                                </th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-9">
                        <table class="table-borderless mt-2 text-uppercase">
                            <tr>
                                <td>{{ $patient->id }}</td>
                            </tr>
                            <tr>
                                <td class="">{{ $patient->full_name }}</td>
                            </tr>
                            <tr>
                                <td>{{ Carbon::parse($patient->date_of_birth)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td id="dob">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $patient->address }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{ $patient->phone_number }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab2">
                <div class="row">
                    <div class="col-sm-3">
                        <table class="table-borderless mt-2">
                            <tr>
                                <th>Name:</th>
                            </tr>
                            <tr>
                                <th>Address:</th>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                            </tr>
                            <tr>
                                <th>Relationship: </th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-9">
                        <table class="table-borderless mt-2 text-uppercase">
                            <tr>
                                <td>{{ $e_contact->fullname }}</td>
                            </tr>
                            <tr>
                                <td>{{ $e_contact->address }}</td>
                            </tr>
                            <tr>
                                <td>{{ $e_contact->phone_number }}</td>
                            </tr>
                            <tr>
                                <td>{{ $e_contact->relationship }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab3">
                <a href="{{ route('patients.edit', $patient->id) }}"
                    class="btn btn-outline-success mt-2 text-capitalize " role="button" target="_blank"
                    rel="noopener noreferrer">edit patient info</a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <form id="form-appointment" action="" method="post">
            <h5 class="h6 bg-dark-subtle p-2">
                Appointment Details
            </h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-flex mb-3">
                        <label for="visit_no" style="min-width: 100px" class="col-form-label fw-semibold text-black">Visit
                            No</label>
                        <div class="col-sm-8">
                            <input readonly type="text" class="form-control" id="visit_no" name="visit_no"
                                value="{{ request()->visit_no }}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex mb-3">
                        <label for="app_duration" style="min-width: 100px"
                            class="col-form-label fw-semibold text-black">Visit
                            Duration</label>
                        <div class="col-sm-8">
                            <select name="app_duration" id="app_duration" class="form-control">
                                <option selected value="20">20 Minutes</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-flex mb-3">
                        <label for="app_date" style="min-width: 100px"
                            class="col-form-label fw-semibold text-black">Date</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control datepicker" name="app_date" id="app_date"
                                value="{{ request()->date }}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex mb-3">
                        <label for="inputEmail3" style="min-width: 100px"
                            class="col-form-label fw-semibold text-black">Time</label>
                        <div class="col-sm-8">
                            <input name="app_time" id="app_time" class="form-control timepicker"
                                value="{{ request()->time }}" />
                        </div>
                    </div>
                </div>
            </div>
            @csrf
            <div class="">
                <h5 class="h6 bg-dark-subtle p-2">
                    <div class="row">
                        <div class="col-4">Modality</div>
                        <div class="col-4">Study</div>
                        <div class="col-4">Doctor/Team</div>
                    </div>
                </h5>
                {{-- @php
                    use App\Models\Modality_type;
                    $modality = Modality_type::get('modality');
                @endphp --}}
                <div class="row">
                    <div class="modality-row">
                        <div class="row">
                            <div class="col-md-4">
                                <select required id="modality" class="form-control" name="modality">
                                    <option value="">Select Any</option>
                                    {{-- @foreach ($modality as $data)
                                        <option value="{{ $data->modality }}">{{ $data->modality }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select required id="study" class="form-control" name="study">
                                    <!-- Options for the second select input will be populated dynamically -->
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select required id="doctor" class="form-control" name="selected_doctor">
                                    <option value="">Select doctor</option>
                                    <option value="doctor_team">Doctor Team</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="h6 bg-dark-subtle p-2 mt-3">Miscellaneous</h5>
                <div class="row">
                    <div class="d-flex justify-content-between ">
                        <div class="d-flex justify-content-between ">
                            <div class="mx-2">
                                <label for="form-label d-block">Misc</label>
                                <input type="text" class="form-control" style="max-width: 260px" name="misc"
                                    id="misc" autocomplete placeholder="eg. Card + Folder" />
                            </div>
                            <div class="mx-2">
                                <label for="form-label d-block">Amount</label>
                                <input type="number" step="0.01" onfocus="this.select()" onblur="fnMisc(this)"
                                    class="form-control" style="max-width: 260px" name="misc_charge" id="misc_charge"
                                    value="0.00" />
                            </div>
                        </div>
                        <div class="service_charge">
                            <label for="charge">Total Charge: </label>
                            <span>GHS</span><input readonly type="number" class="form-control" name="charge"
                                id="charge" value="0" />
                        </div>
                    </div>
                </div>
                <hr class="hr">
                <div class="d-flex justify-content-between mt-2 mb-2">
                    <input type="hidden" name="patient_no" value="{{ $patient->opd_no }}">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
    {{-- @endsection --}}
    {{-- @section('script') --}}
    <script>
        var total = document.getElementById('charge');
        $(document).ready(function() {
            $('#myTabs a').click(function(e) {
                e.preventDefault()
                $(this).tab('show')
            });
            $('select#modality, select#study, select#doctor, select#app_duration').select2();
        });
        $('#misc_charge').on('keyup change', function() {
            var misc_amt = $(this).val();
            if (total.value !== 0) {
                total.value = Number.parseInt(localStorage.getItem('study_charge')) + Number.parseInt(misc_amt)
            } else {
                total.value = +Number.parseInt(misc_amt);
            }
            if (!misc_amt) {
                total.value = +'0'
            }
            if (!total.value && isNaN(total.value)) {
                total.value = +'0';
            }
        });
        $('#modality').change(function() {
            var selectedValue = $(this).val();
            $('#study').attr('required', true);
            $.ajax({
                url: '/modality/study',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    modality: selectedValue
                },
                success: function(data) {
                    var secondSelect = $('select#study');
                    secondSelect.empty();
                    secondSelect.append('<option>Select Any</option>');
                    $.each(data.data, function(key, value) {
                        secondSelect.append('<option value="' + value.study + '">' + value
                            .study +
                            '</option>');
                    });
                }
            });
        });
        $('#study').change(function() {
            var selectedValue = $(this).val();
            $.ajax({
                url: '/modality/study/charge',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    study: selectedValue
                },
                success: function(data) {
                    localStorage.setItem('study_charge', data.data.study_charge);
                    var misc_charge = document.getElementById('misc_charge') ?? 0;
                    if (misc_charge.value !== 0) {
                        total.value = Number.parseInt(localStorage.getItem('study_charge')) + Number
                            .parseInt(misc_charge.value)
                    } else {
                        total.value = +Number.parseInt(data.data.study_charge);
                    }
                    if (isNaN(total.value) || total.value == '') {
                        total.value = "0";
                    }
                }
            });
        });

        function fnMisc(target) {
            if (!target.value || isNaN(target.value)) {
                target.value = '0';
                if (localStorage.getItem('study_charge')) {
                    total.value = Number.parseInt(localStorage.getItem('study_charge'))
                }
            }
        }
        $('#form-appointment').on('submit', e => {
            localStorage.removeItem('study_charge');
            return true;
        });
        function calculateAge(birthdate) {
            var today = new Date();
            var birthDate = new Date(birthdate);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age + ' years';
        }
        $("td#dob").text(calculateAge("{{ $patient->date_of_birth }}"));
    </script>
@endsection
