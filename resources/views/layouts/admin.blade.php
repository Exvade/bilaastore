<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Bilaa's Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50">

    <header class="md:hidden bg-white border-b border-pink-100 p-4 flex justify-between items-center sticky top-0 z-50">
        <h1 class="text-xl font-bold text-pink-500 italic">Bilaa's Admin</h1>
        <button id="menu-toggle" class="p-2 text-pink-500 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </header>

    <div class="flex min-h-screen">
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 w-64 bg-white border-r border-pink-100 transform -translate-x-full transition-transform duration-300 md:relative md:translate-x-0">
            <div class="p-8">
                <h2 class="text-2xl font-bold text-pink-500 italic mb-8">Bilaa's <span
                        class="text-slate-800">Store</span></h2>

                <nav class="space-y-2">
                    <a href="/admin/dashboard"
                        class="flex items-center p-3 rounded-2xl font-semibold transition {{ Request::is('admin/dashboard') ? 'bg-pink-500 text-white shadow-lg shadow-pink-200' : 'text-slate-600 hover:bg-pink-50 hover:text-pink-500' }}">
                        <span>Dashboard</span>
                    </a>

                    <a href="/admin/apps"
                        class="flex items-center p-3 rounded-2xl font-semibold transition {{ Request::is('admin/apps*') ? 'bg-pink-500 text-white shadow-lg shadow-pink-200' : 'text-slate-600 hover:bg-pink-50 hover:text-pink-500' }}">
                        <span>Kelola Aplikasi</span>
                    </a>

                    <a href="/admin/settings"
                        class="flex items-center p-3 rounded-2xl font-semibold transition {{ Request::is('admin/settings*') ? 'bg-pink-500 text-white shadow-lg shadow-pink-200' : 'text-slate-600 hover:bg-pink-50 hover:text-pink-500' }}">
                        <span>Kelola WhatsApp</span>
                    </a>

                    <a href="{{ route('testimonies.index') }}"
                        class="flex items-center p-3 rounded-2xl font-semibold transition {{ Request::is('admin/testimonies*') ? 'bg-pink-500 text-white shadow-lg shadow-pink-200' : 'text-slate-600 hover:bg-pink-50 hover:text-pink-500' }}">
                        <span>Kelola Testimoni</span>
                    </a>

                    <div class="pt-10">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="w-full flex items-center p-3 text-red-400 font-semibold hover:bg-red-50 rounded-2xl transition">
                                Logout
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </aside>

        <div id="sidebar-overlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-30 hidden md:hidden"></div>

        <main class="flex-1 p-4 md:p-10 w-full overflow-hidden">
            <div class="max-w-6xl mx-auto">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        menuToggle.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);
    </script>
</body>

</html>
