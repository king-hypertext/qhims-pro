<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Q - HIMS | {{ $tittle ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes" />
    <meta name="author" content="Kingsley Osei Opoku - (Quajo King)" />
    <meta name="keywords"
        content="Q-HIMS is a web-based system for hospitals to manage mostly all the processes and activities of the hospital" />
    <link rel="stylesheet" href="{{ asset('font-icons/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/alert/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/mdb/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('root/app.css') }}" />
    <script src="{{ asset('plugins/jQuery/external/jquery.js') }}"></script>
    <script src="{{ asset('plugins/alert/sweetalert2.all.min.js') }}"></script>
</head>

<body class="app">
    <div class="app-view">
        <div class="app-navigation">
            @include('layout.navigation')
        </div>
        <div class="app-content">
            <header
                class="app-header d-flex justify-content-between py-2 my-auto shadow position-sticky top-0 bg-white ">
                <h6 class="h6 mt-1" data-date-time="true"></h6>
                <ul class="nav">
                    <li class="nav-item ">user type:</li>
                </ul>
            </header>
            @yield('breadcrump')
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layout.modals.schedule-appointment')
    <script src="{{ asset('plugins/mdb/mdb.umd.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('root/index.js') }}"></script>
    <script type="text/javascript">
        const showSuccessAlert = Swal.mixin({
            position: 'top',
            toast: true,
            timer: 6500,
            showConfirmButton: false,
            timerProgressBar: false,
            showClass: {
                popup: `
                        animate__animated
                        animate__fadeInDown
                        animate__faster
                        `
            },
            hideClass: {
                popup: `
                        animate__animated
                        animate__fadeOutIn
                        animate__faster
                        `
            }
        });
        $(document).ready(() => {
            setInterval(() => {
                $('[data-date-time]').html(new Date().toLocaleString())
            }, 1000);
        });
    </script>
    @if (session('success'))
        <script type="text/javascript">
            showSuccessAlert.fire({
                icon: 'success',
                text: '{{ session('success') }}',
                padding: '15px',
                width: 'auto'
            });
        </script>
    @endif
    @if (session('error'))
        <script type="text/javascript">
            showSuccessAlert.fire({
                icon: 'error',
                text: '{{ session('error') }}',
                padding: '15px',
                width: 'auto'
            });
        </script>
    @endif
    @if (session('warning'))
        <script type="text/javascript">
            showSuccessAlert.fire({
                icon: 'warning',
                text: '{{ session('warning') }}',
                padding: '15px',
                width: 'auto'
            });
        </script>
    @endif
</body>

</html>