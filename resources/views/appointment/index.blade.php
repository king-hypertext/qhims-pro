@extends('layout.page')
@section('content')
    <div>
        <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    </div>
    <div class="table-responsive-lg">
        <table class="table table-striped table-hover table-borderless align-middle">
            <tbody class="table-group-divider">
                <tr class="">
                    <td class="container">
                        <div class="table-responsive-xl">
                            <table
                                class="table table-striped-columns table-hover table-borderless table-primary align-middle">
                                <thead class="table-light">
                                    <caption>
                                        Table Name
                                    </caption>
                                    <tr>
                                        <th colspan="2">patient name</th>
                                        <th>appiontment status</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr class="">
                                        <td scope="row">Item</td>
                                        <td>Item</td>
                                        <td>Item</td>
                                    </tr>
                                    <tr class="">
                                        <td colspan="3" scope="row">Item</td>
                                    </tr>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
