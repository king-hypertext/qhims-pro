@extends('layout.page')
@section('content')
    <div class="container-fluid mt-4">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false"
                        tabindex="-1">Profile</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false"
                        tabindex="-1">Contact</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another
                        tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control
                        the content visibility and styling. You can use it with tabs, pills, and any other
                        <code>.nav</code>-powered navigation.</p>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control the content visibility and styling. You can use it with tabs, pills, and any other
                        <code>.nav</code>-powered navigation.</p>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking
                        another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                        control the content visibility and styling. You can use it with tabs, pills, and any other
                        <code>.nav</code>-powered navigation.</p>
                </div>
            </div>
        </div>
    </div>
@endsection