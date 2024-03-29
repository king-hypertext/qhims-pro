<aside class="app-navigation">
    <h5 class="text-center fw-medium text-uppercase mt-3">{{-- {{ env('APP_NAME') }} --}} q hims</h5>
    <ul class="nav flex-column text-capitalize ">
        <li class="nav-item text-capitalize d-inline">
            <a class="app-col-nav-link nav-link {{ Request::segment(2) == 'qhims' || Request::segment(2) == '' ? 'active' : '' }}"
                href="{{ route('quick-links') }}">quick links
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link" href="#schedule-appointment" data-bs-toggle="modal">Schedule Appointment
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('appointment.index') }}"
                class="app-col-nav-link nav-link {{ Request::segment(2) == 'appointment' ? 'active' : '' }}" target="_blank"
                title="view scheduled appointments" rel="noopener noreferrer">View Appointments
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link {{ Request::segment('2') == 'patient' && Request::segment('3') == 'add-new' ? 'active' : '' }}"
                href="{{ route('patient.add-new') }}">add Patient
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link {{ Request::segment('2') == 'patients' ? 'active' : '' }}"
                href="{{ route('patients.index') }}">Patients
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link {{ Request::segment(2) == 'admin' && Request::segment(3) == 'hrm' ? 'active' : '' }}"
                href="{{-- {{ route('hrm.index') }} --}}#" {{-- target="_blank" --}} rel="noopener noreferrer">Human Resource Management
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link {{ Request::segment('2') == 'pharmacy' ? 'active' : '' }}"
                href="{{ route('pharmacy.index') }}">pharmacy
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link {{ Request::segment('2') == 'bills' ? 'active' : '' }}"
                href="{{ route('bills.index') }}">manage bills
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>
</aside>
