<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Q - HIMS | {{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes" />
    <meta name="author" content="Kingsley Osei Opoku - (Quajo King)" />
    <meta name="keywords"
        content="Q-HIMS is a web-based system for hospitals to manage mostly all the processes and activities of the hospital" />
    <link rel="stylesheet" href="{{ asset('font-icons/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/mdb/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('root/app.css') }}" />
    <script src="{{ asset('plugins/jQuery/external/jquery.js') }}"></script>
    
</head>

<body class="app-login">
    {{-- <div class="app-view"> --}}
    <div class="container">
        @yield('section')
    </div>
    {{--
    </div> --}}
    {{-- <script src="{{ asset('plugins/mdb/mdb.umd.min.js') }}"></script> --}}
    <script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            setInterval(() => {
                $('[data-date-time]').html(new Date().toUTCString())
            }, 1000);
        });
        self.addEventListener('DOMContentLoaded', () => {
            console.log('js loaded');
            document.querySelectorAll('input').forEach(input => {
                input.addEventListener('blur', () => {
                    if (input.value == null || input.value == '') {
                        input.classList.remove('active')
                    } else if (input.value !== null) {
                        input.classList.add('active')
                    }
                })
            })
        })
    </script>
    @yield('script')
</body>

</html>
