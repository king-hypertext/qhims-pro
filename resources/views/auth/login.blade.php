@extends('auth.layout')
@section('section')
    <div class="container text-center text-white">
        <h5 class="h4 text-uppercase fw-bold ">q-softwares</h5>
        <h5 class="h4 text-capitalize ">q-health information management system</h5>
    </div>
    <div class="row justify-content-center" style="place-items: center">
        <div class="card p-4 p-md-5 border-0 mt-5 login" style="max-width: 520px">
            <form id="login" method="POST" autocomplete="off">
                @csrf
                @if (session('new_password'))
                    <div class="alert alert-info  text-center  text-info">{{ session('new_password') }}</div>
                @endif
                @if (session('error'))
                    <div class="h6 alert alert-danger alert-dismissible text-danger text-center">
                        <ul class="list-unstyled text-center">
                            <li>{{ session('error') }}</li>
                        </ul>
                    </div>
                @endif
                <div class="form-outline mb-4">
                    <input required type="text" autofocus name="username" id="username"
                        class="form-control form-control-lg" value="{{ @old('username') }}" />
                    <label class="form-label" for="username">Username</label>
                </div>
                <div class="form-outline mb-4">
                    <input required type="password" name="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit" class="btn btn-lg btn-primary btn-block">
                        <span id="btn-icon" class="fas fa-spinner fa-spin" style="display: none"></span>
                        Secure Login
                    </button>
                </div>
            </form>
            <div class="form-text">
                Forgotten Password? <a href="#" title="Click to reset your password" class="btn-link">Reset</a>
            </div>
            <div class="text-center mt-4">
                <h6 class="h6" data-date-time="true"></h6>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#login').on('submit', (e) => {
                e.preventDefault();
                $('#btn-icon').show();
                $('#submit').text('Loading');
            })
        })
    </script>
@endsection
