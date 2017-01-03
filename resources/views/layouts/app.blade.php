<html>
<head>
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 20vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .input {
            padding: 25px;
            padding: 25px;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .center {
            text-align: center;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            font-family: 'Raleway', sans-serif;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>


</head>
<body>
@section('sidebar')
    <div class="top-right links">
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    </div>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                <a href="{{ URL::to('course/0/edit') }}">Add Course</a>
                <a href="{{ URL::to('/') }}">Home</a>
            </div>
        </div>
    </div>
@show

<div class="container">
    @yield('content')
</div>

</body>
</html>