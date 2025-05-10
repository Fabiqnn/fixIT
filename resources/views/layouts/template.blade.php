<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat&family=Poppins&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Admin</title>
</head>

<body class="bg-gray-100">
    <div class="wrapper bg-white">

        {{-- Header --}}
        @include('layouts.header')

        {{-- Sidebar --}}
        @include('layouts.sidebar')

        {{-- Content --}}
        <div class="app-content pl-64 pt-14">
            <div class="container-fluid">
                @include('layouts.breadcrumb')
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </div>

        {{-- Footer --}}
        {{-- @include('layouts.footer') --}}

    </div>
</body>

</html>
