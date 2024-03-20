@extends('layout.page')
@section('content')
    <div class="container-fluid mt-4">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <a class="nav-link active" href="{{ route('hrm.index') }}" id="nav-home-tab" data-bs-toggle="tab"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">staff
                    </a>
                    <a class="nav-link" href="{{ route('staff.add-new') }}" onclick="window.open(this.href,'_self')"
                        id="nav-contact-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-contact"
                        aria-selected="false" tabindex="-1">Add
                        Staff
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                </div>
            </div>
        </div>
    </div>
@endsection
