<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'fixIT')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 h-screen">
    <div class="flex h-full">
        @include('layouts.sidebar')
        <div id="mainContent" class="flex-1 flex flex-col ml-64 transition-all duration-300">
            @include('layouts.header')
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        let sidebarVisible = true;

        toggleBtn.addEventListener('click', () => {
            sidebarVisible = !sidebarVisible;

            if (sidebarVisible) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                mainContent.classList.remove('ml-0');
                mainContent.classList.add('ml-64');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
                mainContent.classList.remove('ml-64');
                mainContent.classList.add('ml-0');
            }
        });

        const toggleSubmenuBtn = document.getElementById('toggleSubmenu');
        const submenu = document.getElementById('submenu');
        const arrowIcon = document.getElementById('arrowIcon');

        toggleSubmenuBtn.addEventListener('click', () => {
            submenu.classList.toggle('hidden');
            arrowIcon.classList.toggle('rotate-180'); // animasi panah
        });
    </script>

</body>

</html>
