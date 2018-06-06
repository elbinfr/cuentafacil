<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Cuenta F&aacute;cil | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('plugins/template/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/toastr/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/template/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="{{ asset('plugins/template/css/main.min.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
<div class="cover"></div>
<div class="ibox login-content">
    <div class="text-center">
        <span class="auth-head-icon"><i class="la la-user"></i></span>
    </div>
    <form class="ibox-body" id="login-form" action="{{ route('login') }}" method="POST">
        <h4 class="font-strong text-center mb-5">Cuenta F&aacute;cil</h4>
        {{ csrf_field() }}
        <div class="form-group mb-4 {{ $errors->has('username') ? 'has-error' : '' }}">
            <input class="form-control form-control-line"
                   type="text"
                   id="username"
                   name="username"
                   value="{{ old('username') }}"
                   placeholder="Ingrese su nombre de usuario">
            {!! $errors->first('username', '<label class="help-block" >:message<label>') !!}
        </div>
        <div class="form-group mb-4">
            <input class="form-control form-control-line"
                   type="password"
                   name="password"
                   placeholder="Ingrese su contraseña">
        </div>
        <div class="text-center mb-4">
            <button class="btn btn-primary btn-rounded btn-block">Ingresar</button>
        </div>
    </form>
</div>
<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>

<!-- CORE PLUGINS-->
<script src="{{ asset('plugins/template/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/jquery-idletimer/dist/idle-timer.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('plugins/template/vendors/printMe/jquery-printme.min.js') }}"></script>
<!-- PAGE LEVEL PLUGINS-->
<!-- CORE SCRIPTS-->
<script src="{{ asset('plugins/template/js/app.min.js') }}"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script>
    $(function() {
        $('#username').focus();

        $('#login-form').validate({
            errorClass: "help-block",
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                username: "Debe ingresar su nombre de usuario",
                password: "Debe ingresar su contraseña"
            },
            highlight: function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group").removeClass("has-error")
            },
        });
    });
</script>
</body>

</html>