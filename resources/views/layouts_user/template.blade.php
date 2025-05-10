<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>landingpage</title>

    @vite('resources/css/app.css')

</head>

<body class="">
    <div class="wrapper bg-white xl:px-0 mx-auto xl:max-w-[1400px] w-full max-w-full" >
        @include('layouts_user.header')
        <section class="font-inter">
            @yield('content')
        </section>
        <section>
            @include('layouts_user.footer')
        </section>
    </div>
</body>

</html>
