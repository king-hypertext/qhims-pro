@extends('layout.page')
@section('content')
    <div>
        <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    </div>
    <div class="container-fluid mt-4">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false"
                        tabindex="-1">Medical History</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false"
                        tabindex="-1">Emergency Contacts</button>
                </div>
            </nav>
            {{-- <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another
                        tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
                        the content visibility and styling. You can use it with tabs, pills, and any other
                        <code>.nav</code>-powered navigation.
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control the content visibility and styling. You can use it with tabs, pills, and any other
                        <code>.nav</code>-powered navigation.
                    </p>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control the content visibility and styling. You can use it with tabs, pills, and any other
                        <code>.nav</code>-powered navigation.
                    </p>
                </div>
            </div> --}}
            <div class="table-responsive-lg">
                <table class="table table-hover table-border align-middle" id="all-patients">
                    <thead class="">
                        <caption>
                            All Patients
                        </caption>
                        <tr>
                            <th>#ID</th>
                            <th>full name</th>
                            <th>phone</th>
                            <th>birth date</th>
                            <th>staff patient</th>
                            <th>created at</th>
                            {{-- <th>sms/email</th> --}}
                            <th colspan="3">actions</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($patients as $patient)
                            @if ($patient->is_staff == 1)
                                <tr class="table-success ">
                                    <td scope="col">{{ $patient->id }}</td>
                                    <td>{{ $patient->full_name }}</td>
                                    <td>{{ $patient->phone_number ?? 'N/A' }}</td>
                                    <td>{{ $patient->date_of_birth }}</td>
                                    <td>{{ $patient->is_staff == 1 ? 'YES' : 'NO' }}</td>
                                    <td>{{ $patient->created_at }}</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <button type="button" name="" id="" class="btn"
                                                title="send SMS">
                                                <i class="fas fa-chat"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            echo $patient->email
                                                ? '<div class="d-grid gap-2">
                                        <button type="button" name="" id="" class="btn" title="Send E-mail">
                                            <i class="fas fa-email"></i>
                                        </button>'
                                                : '<button disabled type="button" name="" id="" class="btn" title="Send E-mail">
                                            <i class="fas fa-link"></i>
                                        </button>';
                                        @endphp

                                    </td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <button type="button" name="" id="" class="btn px-2">
                                                <i class="fas fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" role="button" target="_blank"
                                            rel="noopener noreferrer" href="{{ route('patients.edit', [$patient->id]) }}"
                                            role="button">
                                            <i class="fas fa-pen-to-square"></i>
                                        </a>

                                    </td>
                                </tr>
                            @else
                                <tr class="">
                                    <td scope="col">{{ $patient->id }}</td>
                                    <td>{{ $patient->full_name }}</td>
                                    <td>{{ $patient->phone_number ?? 'N/A' }}</td>
                                    <td>{{ $patient->date_of_birth }}</td>
                                    <td>{{ $patient->is_staff == 1 ? 'YES' : 'NO' }}</td>
                                    <td>{{ $patient->created_at }}</td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <button type="button" name="" id="" class="btn"
                                                title="send SMS">
                                                <i class="fas fa-chat"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            echo $patient->email
                                                ? '<div class="d-grid gap-2">
                                        <button type="button" name="" id="" class="btn" title="Send E-mail">
                                            <i class="fas fa-email"></i>
                                        </button>'
                                                : '<button disabled type="button" name="" id="" class="btn" title="Send E-mail">
                                            <i class="fas fa-link"></i>
                                        </button>';
                                        @endphp

                                    </td>
                                    <td>
                                        <div class="d-grid gap-2">
                                            <button type="button" name="" id="" class="btn px-2">
                                                <i class="fas fa-trash-can"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary" role="button" target="_blank"
                                            rel="noopener noreferrer" href="{{ route('patients.edit', [$patient->id]) }}"
                                            role="button">
                                            <i class="fas fa-pen-to-square"></i>
                                        </a>

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
