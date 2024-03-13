<aside class="app-navigation">
    <h5 class="text-center fw-medium text-uppercase mt-3">{{-- {{ env('APP_NAME') }} --}} q hims</h5>
    <ul class="nav flex-column">
        <li class="nav-item text-capitalize d-inline">
            <a class="app-col-nav-link nav-link active " href="#">quick links
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link" href="#schedule-appointment" data-bs-toggle="modal">Schedule Appointment
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link" href="#">Patients
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="app-col-nav-link nav-link {{ Request::segment(1) == 'admin' && Request::segment(2) == 'hrm' ? 'active' : '' }}"
                href="{{ route('hrm.index') }}">Human Resource Management
                <i class="float-end my-1 fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>
</aside>
