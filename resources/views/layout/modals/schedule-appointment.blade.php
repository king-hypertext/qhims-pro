<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
<!-- The Modal -->
<div class="modal fade" id="schedule-appointment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true" style="">
    <div class="modal-dialog modal-dialog-scrollable  modal-lg">
        <div class="modal-content" style="min-height: 500px">
            <div class="modal-header">
                <h4 class="modal-title text-uppercase ">book appointment</h4>
                <button type="button" title="exit" data-bs-toggle="button"
                    class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="container-sm">
                            <div class="row mb-2">
                                <h5 class="h5">Search Patient</h5>
                            </div>
                            {{-- search patient by opd_no --}}
                            <div class="row mb-3 ">
                                <div class="col-sm-10">
                                    <div class="form-outline">
                                        <input type="text" onfocus="this.select()" name="p_opd_no" id="p_opd_no"
                                            class="form-control" />
                                        <label for="p_opd_no" class="form-label">OPD Number</label>
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
                                        <input type="text" onfocus="this.select()" name="p_name" id="p_name"
                                            class="form-control" />
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
                                        <input type="text" onfocus="this.select()" name="p_phone" id="p_phone"
                                            class="form-control" />
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
                    <div class="col-sm-6">
                        <div class="container-sm">
                            <h5 class="h5">Appointment Scheduling Details</h5>
                            <form id="appointment-form" method="post">
                                @csrf
                                <table class="table table-borderless row">
                                    <thead>
                                        <style>
                                            td,
                                            th,
                                            .table>* {
                                                padding: 0 !important;
                                            }
                                        </style>
                                        <tr class="row pb-1">
                                            <th scope="col" class="col-sm-4">Patient No</th>
                                            <td scope="col" class="col-sm-8">
                                                <input readonly type="text" name="opd_number"
                                                    class="form-control-sm w-100" id="opd_number" />
                                            </td>
                                        </tr>
                                        <tr class="row pb-1">
                                            <th scope="row" class="col-sm-4">Name(s)</th>
                                            <td class="col-sm-8">
                                                <input readonly class="form-control-sm w-100" type="text"
                                                    id="names" />
                                            </td>
                                        </tr>
                                        <tr class="row pb-1">
                                            <th scope="row" class="col-sm-4">Age</th>
                                            <td class="col-sm-8">
                                                <input readonly class="form-control-sm w-100" type="text"
                                                    id="names" />
                                            </td>
                                        </tr>
                                        <tr class="row pb-1">
                                            <th scope="row" class="col-sm-4">Time</th>
                                            <td class="col-sm-8">
                                                <input readonly class="form-control-sm w-100" type="text"
                                                    id="names" />
                                            </td>
                                        </tr>
                                        <tr class="row pb-1">
                                            <th scope="row" class="col-sm-4">Date</th>
                                            <td class="col-sm-8">
                                                <input readonly class="form-control-sm w-100" type="text"
                                                    id="names" />
                                            </td>
                                        </tr>
                                        <tr class="row pb-1">
                                            <th scope="row" class="col-sm-4">Visit No</th>
                                            <td class="col-sm-8">
                                                <input readonly class="form-control-sm w-100" type="text"
                                                    id="names" />
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                                {{-- <button class="btn btn-primary">Add New Visit</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-toggle="button" id="book-appointment"
                    class="btn btn-primary disabled " title="Book appointment for this patient">Add New Visit</button>
                <a href="{{ route('patient.add-new') }}" target="_blank" rel="noopener noreferrer" type="button" class="btn btn-warning "
                    title="Add new patient">Add New Patient</a>
                <button type="button" data-bs-toggle="button" class="btn btn-danger"
                    data-bs-dismiss="modal" aria-label="Close Modal" title="Close appointment">Discard</button>
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
        var input = $('#p_opd_no');
        console.log(input.val().toString().toUpperCase());
        $('ul#searched-list').empty();
        $('#book-appointment').addClass('disabled');
        if (!input.val()) {
            input.focus();
        } else {
            /* $.ajax({
                url: "/patient/opd_no/" + input.val().toString().toUpperCase(),
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(data) {
                    var li;
                    if (!data.failed) {
                        data.data.forEach(d => {
                            console.log(d);
                            li = `<li class="list-group-item p-0">` +
                                `<a type="button" onclick="fillApp(event)" class="nav-link p-0" data-opd_no="${d.opd_no}">` +
                                d.first_name + " " + d.last_name +
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
                error: function(err) {
                    console.log(err);
                }
            }); */
        }
    }

    function searchByPatientName() {
        var input = $('#p_name');
        $('ul#searched-list').empty();
        $('#book-appointment').addClass('disabled');
        if (!input.val()) {
            input.focus();
        } else {
            /* $.ajax({
                url: "/search-patient/name/" + input.val().toString().toLowerCase(),
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(data) {
                    var li;
                    if (!data.failed) {
                        data.data.forEach(d => {
                            console.log(d);
                            li = `<li class="list-group-item p-0">` +
                                `<a type="button" onclick="fillApp(event)" class="nav-link p-0" data-opd_no="${d.opd_no}">` +
                                d.first_name + " " + d.last_name +
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
                error: function(err) {

                }
            }); */
        }
    }

    function searchPatientByPhone() {
        var input = $('#p_phone');
        $('ul#searched-list').empty();
        $('#book-appointment').addClass('disabled');
        if (!input.val()) {
            input.focus();
        } else {
            /* $.ajax({
                url: "/search-patient/phone/" + input.val(),
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(data) {
                    var li;
                    if (!data.failed) {
                        data.data.forEach(d => {
                            console.log(d);
                            li = `<li class="list-group-item p-0">` +
                                `<a type="button" onclick="fillApp(event)" class="nav-link p-0" data-opd_no="${d.opd_no}">` +
                                d.first_name + " " + d.last_name +
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
                error: function(err) {

                }
            }); */
        }
    }

    $(document).ready(function() {
        $("#p_name").keypress(function(e) {
            if (!isNaN(String.fromCharCode(e.which))) {
                e.preventDefault();
            }
        });
        $("#p_phone").keypress(function(e) {
            if (isNaN(String.fromCharCode(e.which))) {
                e.preventDefault();
            }
        });

        $('input.timepicker').timepicker({
            currentTime: moment(),
            timeFormat: 'h:mm',
            interval: 30,
        });
    });

    function fillApp(target) {
        var $uuid = target.target.dataset.opd_no;
        console.log($uuid);
        $('#book-appointment').removeClass('disabled');
        $.ajax({
            url: "/patient/opd_no/" + $uuid,
            type: 'GET',
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(data) {
                console.log(data);
                $('input[name="f_name"]').val(data.data[0].first_name);
                $('input[name="l_name"]').val(data.data[0].last_name);
                $('input[name="visit_no"]').val("{{ getvisitNumber() }}");
                $('input[name="opd_number"]').val(data.data[0].opd_no);
                $('input[name="age"]').val(calculateAge(data.data[0].date_of_birth));
            }
        });
    }

    $('#book-appointment').on('click', function() {
        var form = $('form#appointment-form').serialize();
        $.ajax({
            url: "/book_appointment",
            type: 'POST',
            data: form,
            success: function(data) {
                if (data.success) {
                    console.log(data);
                    window.open(data.url, '_self');
                }
            },
            cache: false,
            error: function(err) {
                console.log(err, err.responseJSON.message);
                // $('.error-msg').text(error.responseJSON.message);
                // $('.error-msg').show();
                // setTimeout(() => {
                //     $('.error-msg').hide();
                // }, 3000);
            }
        });
    });
    // });

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
