<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                font-size: 12px;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 0px;
            }
            td{
                padding: 2px 0px;
            }
        </style>
        <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}" class="btn btn-default">Home</a>
                    @else
                        <a href="{{ url('/register') }}" class="btn btn-default">Daftar Sekarang</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MedTest
                </div>

                
                <div class="row"> 
                    <div class="col-sm-4"><hr></div>
                    <div class="col-sm-4"><b>Login</b></div>
                    <div class="col-sm-4"><hr></div>
                </div>
                <div class="m-b-md">
                <table>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <tr>
                        <td width="50%">Username</td>
                        <td width="50%"><input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus></td>
                    </tr>
                    @if ($errors->has('username'))
                    <tr><td colspan="2">
                        <div class="alert alert-danger" role="alert"><strong>{{ $errors->first('username') }}</strong></div>
                     </td></tr>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <tr>
                        <td width="50%">Password</td>
                        <td width="50%"><input type="password" class="form-control" placeholder="Password" name="password"  value="{{ old('password') }}" required autofocus></td>
                    </tr>
                    @if ($errors->has('password'))
                    <tr><td colspan="2">
                        <div class="alert alert-danger" role="alert"><strong>{{ $errors->first('password') }}</strong></div>
                     </td></tr>
                    @endif
                </div>
                    <tr><td></td><td style="text-align: left;"><input type="submit" name="submit" value="Login" class="btn btn-primary"> </td></tr>
                </form>
                </table>
                </div>
                
            </div>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
