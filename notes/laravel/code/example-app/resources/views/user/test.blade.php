<html>
<head>
    <title>Laravel学院 | @yield('title', '首页')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
@section('footerScripts')
    <script src="{{ asset('js/app.js') }}"></script>
@show



{{--<p> @datetime('2023-04-01', 'F d, Y') </p>--}}

    <div id="app">
        <welcome-component></welcome-component>
    </div>
</body>
</html>
