<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Calibee for Business</title>
    <meta name="description" content="Calibee for business">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="version" content="GFB-webapp-v0.0.1">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.png') }}">
    <link href="{{ asset('css/6373.7e13f531f8.chunk.css') }}" rel="stylesheet">
    <link href="{{ asset('css/3309.b482f42c.chunk.css') }}" rel="stylesheet">
    <link href="{{ asset('css/8090.07671a41.chunk.css') }}" rel="stylesheet">
    <link href="{{ asset('css/6131.f779d0e7.chunk.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="pace-done">
    <div id="root" aria-hidden="true">
        <div data-reactroot="" class="LoggedInApp__layout___FYP3Y ant-layout-has-sider ant-layout">
            @include('sidebar.sidebar')
            {{-- navbar --}}
            <div class="ant-layout">
                @include('header.navbar')
                <div class="AppContent__content___3NdQe ant-layout-content">
                    <div class="AppContent__page___2sSVT">
                        <div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('javascript')
    @stack('booking-detail')
    @stack('job-detail')
</body>
</html>