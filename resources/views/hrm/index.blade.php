@extends('layout.page')
@section('content')
    <div class="container-fluid mt-4">
        <div class="bd-example m-0 border-0">
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <a class="nav-link active" href="{{ route('hrm.index') }}" id="nav-home-tab" data-bs-toggle="tab"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">manage staff
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
                    <div class="table-responsive-xl">
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th scope="col">Column 1</th>
                                    <th scope="col">Column 2</th>
                                    <th scope="col">Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">R1C1</td>
                                    <td>R1C2</td>
                                    <td>R1C3</td>
                                </tr>
                                <tr class="">
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
