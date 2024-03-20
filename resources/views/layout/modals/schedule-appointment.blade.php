<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
<!-- The Modal -->
<div class="modal fade" id="schedule-appointment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true" style="">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content" style="min-height: 500px">
            <div class="modal-header">
                <h4 class="modal-title text-uppercase ">book appointment</h4>
                <button type="button" title="exit" data-bs-toggle="button" class="btn btn-outline-danger"
                    data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <h5 class="h5">Search Patient</h5>
                            </div>
                            {{-- search patient by id --}}
                            <div class="row mb-3 ">
                                <div class="col-sm-10">
                                    <div class="form-outline">
                                        <input autocomplete="yes" type="text" onfocus="this.select()" name="id" id="id"
                                            class="form-control" />
                                        <label for="id" class="form-label">OPD Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" onclick="searchPatientByOPDNumber()"
                                        class="btn btn-outline-secondary py-2" title="Search Patient"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                            {{-- search patient by name --}}
                            <div class="row mb-3 ">
                                <div class="col-sm-10">
                                    <div class="form-outline">
                                        <input autocomplete="yes" type="text" onfocus="this.select()" name="p_name"
                                            id="p_name" class="form-control" />
                                        <label for="p_name" class="form-label">Patient Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" onclick="searchByPatientName()"
                                        class="btn btn-outline-secondary py-2" title="Search Patient"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                            {{-- search patient by phone --}}
                            <div class="row mb-3 ">
                                <div class="col-sm-10">
                                    <div class="form-outline">
                                        <input autocomplete="yes" type="text" onfocus="this.select()" name="p_phone"
                                            id="p_phone" class="form-control" />
                                        <label for="p_phone" class="form-label">Patient Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" onclick="searchPatientByPhone()"
                                        class="btn btn-outline-secondary py-2" title="Search Patient"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="h6">Search Results</h6>
                                <div class="card border-0" style="max-height: 220px;">
                                    <div class="card-body py-0 overflow-y-auto">
                                        <!-- Some borders are removed -->
                                        <ul id="searched-list"
                                            class="nav list-group list-group-flush user-select-none ">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="container-fluid">
                            <h5 class="h5">Appointment Scheduling Details</h5>
                            <form id="appointment-form" method="post">
                                {{ csrf_field() }}
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="patient_id">Patient No</label>
                                    <div class="col-sm-8">
                                        <input readonly type="text" name="patient_id" class="form-control-sm w-100"
                                            id="patient_id" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="names">Name(s)</label>
                                    <div class="col-sm-8">
                                        <input readonly class="form-control-sm w-100" type="text" name="names"
                                            id="names" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="dob">Birth Date</label>
                                    <div class="col-sm-8">
                                        <input readonly type="text" name="dob" class="form-control-sm w-100" id="dob" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="age">Age</label>
                                    <div class="col-sm-8">
                                        <input readonly type="text" name="age" class="form-control-sm w-100" id="age" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="app_time">Time</label>
                                    <div class="col-sm-8">
                                        <input readonly type="text" name="app_time"
                                            class="form-control-sm w-100 timepicker" id="app_time" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="app_date">Date</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="app_date" class="form-control-sm w-100 datepicker"
                                            id="app_date" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-4 col-form-label-sm" for="visit_no">Visit No</label>
                                    <div class="col-sm-8">
                                        <input readonly type="text" name="visit_no" class="form-control-sm w-100"
                                            id="visit_no" />
                                    </div>
                                </div>
                                {{-- <button class="btn btn-primary">Add New Visit</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-toggle="button" id="book-appointment" class="btn btn-primary disabled "
                    title="Book appointment for this patient">Add New Visit</button>
                <a href="{{ route('patient.add-new') }}" target="_blank" rel="noopener noreferrer" type="button"
                    class="btn btn-warning " title="Add new patient">Add New Patient</a>
                <button type="button" data-bs-toggle="button" class="btn btn-danger" data-bs-dismiss="modal"
                    aria-label="Close Modal" title="Close appointment">Discard</button>
            </div>
        </div>
    </div>
</div>
<style>
    input:read-only {
        cursor: default;
        background-color: rgb(227, 227, 227);
        color: #000;
        border: 0;
    }
</style>
<script>
    function searchPatientByOPDNumber() {
        var input = $('#id');
        console.log(input.val().toString().toUpperCase());
        $('ul#searched-list').empty();
        $('#book-appointment').addClass('disabled');
        if (!input.val()) {
            input.focus();
        } else {
            $.ajax({
                url: "/qhims/patients/" + input.val().toString().toUpperCase(),
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function (data) {
                    console.log(data);
                    var li;
                    if (!data.failed) {
                        data.data.forEach(d => {
                            console.log(d);
                            li = `<li class="list-group-item p-0">` +
                                `<a type="button" onclick="fillApp(event)" class="nav-link p-0" data-id="${d.id}">` +
                                d.full_name +
                                `</a>` +
                                `</li>`;
                            console.log(li);
                            $('ul#searched-list').append(li);
                        });
                    }
                    if (data.failed) {
                        $('ul#searched-list').append($(
                            '<div class="text-center text-dark">Empty results</div>'))
                    }
                    console.log(data);
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    }

    function searchByPatientName() {
        var input = $('#p_name');
        $('ul#searched-list').empty();
        $('#book-appointment').addClass('disabled');
        if (!input.val()) {
            input.focus();
        } else {
            $.ajax({
                url: "/qhims/patient/name",
                data: {
                    _token: "{{ csrf_token() }}",
                    name: input.val().toString().toUpperCase()
                },
                success: function (data) {
                    var li;
                    if (!data.failed) {
                        data.data.forEach(d => {
                            console.log(d);
                            li = `<li class="list-group-item p-0">` +
                                `<a type="button" onclick="fillApp(event)" class="nav-link p-0" data-id="${d.id}">` +
                                d.full_name +
                                `</a>` +
                                `</li>`;
                            console.log(li);
                            $('ul#searched-list').append(li);
                        });
                    }
                    if (data.failed) {
                        $('ul#searched-list').append($(
                            '<div class="text-center text-dark">Empty results</div>'))
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    }

    function searchPatientByPhone() {
        var input = $('#p_phone');
        $('ul#searched-list').empty();
        $('#book-appointment').addClass('disabled');
        if (!input.val()) {
            input.focus();
        } else {
            $.ajax({
                url: "/qhims/patient/phone",
                data: {
                    _token: "{{ csrf_token() }}",
                    phone: input.val()
                },
                success: function (data) {
                    var li;
                    if (!data.failed) {
                        data.data.forEach(d => {
                            console.log(d);
                            li = `<li class="list-group-item p-0">` +
                                `<a type="button" onclick="fillApp(event)" class="nav-link p-0" data-id="${d.id}">` +
                                d.full_name +
                                `</a>` +
                                `</li>`;
                            console.log(li);
                            $('ul#searched-list').append(li);
                        });
                    }
                    if (data.failed) {
                        $('ul#searched-list').append($(
                            '<div class="text-center text-dark">Empty results</div>'))
                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    }

    $(document).ready(function () {
        $("#p_name").keypress(function (e) {
            if (!isNaN(String.fromCharCode(e.which))) {
                e.preventDefault();
            }
        });
        $("#p_phone").keypress(function (e) {
            if (isNaN(String.fromCharCode(e.which))) {
                e.preventDefault();
            }
        });
    });
    function fillApp(target) {
        var $uuid = target.target.dataset.id;
        console.log($uuid);
        $('#book-appointment').removeClass('disabled');
        $.ajax({
            url: "/qhims/patients/" + $uuid,
            type: 'GET',
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function (data) {
                console.log(data);
                $('input[name="names"]').val(data.data[0].full_name);
                $('input[name="visit_no"]').val("{{ getvisitNumber() }}");
                $('input[name="app_time"]').val(moment().format('H:m'));
                $('input[name="app_date"]').val("{{ Date('Y-m-d') }}");
                $('input[name="dob"]').val(data.data[0].date_of_birth);
                $('input[name="patient_id"]').val(data.data[0].id);
                $('input[name="age"]').val(calculateAge(data.data[0].date_of_birth));
            }
        });
    }
    $('#book-appointment').on('click', function () {
        var form = $('form#appointment-form').serialize();
        $.ajax({
            url: "{{ route('appointment.schedule.post') }}",
            type: 'POST',
            data: form,
            success: function (data) {
                console.log(data);
                if (data.success) {
                    console.log(data);
                    window.open(data.url, '_self');
                }
            },
            cache: false,
            error: function (err) {
                console.log(err, err.responseJSON.message);
                // $('.error-msg').text(error.responseJSON.message);
                // $('.error-msg').show();
                // setTimeout(() => {
                //     $('.error-msg').hide();
                // }, 3000);
            }
        });
    });

    function calculateAge(birthdate) {
        var today = new Date();
        var birthDate = new Date(birthdate);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }
</script>