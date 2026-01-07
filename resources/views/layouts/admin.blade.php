<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">
    <div class="flex min-h-screen">
        <div class="w-64 bg-slate-900 text-white p-6">
            <h2 class="text-2xl font-bold mb-8">Admin CMS</h2>
            <nav class="space-y-4">
                <a href="/admin/dashboard" class="block hover:text-blue-400">Dashboard</a>
                <a href="/admin/apps" class="block hover:text-blue-400">Kelola Aplikasi</a>
                <a href="/admin/settings" class="block hover:text-blue-400">Kelola No WhatsApp</a>
                <form action="{{ route('logout') }}" method="POST" class="pt-10">
                    @csrf
                    <button class="text-red-400 hover:text-red-600">Logout</button>
                </form>
            </nav>
        </div>

        <div class="flex-1 p-10">
            @yield('content')
        </div>
    </div>
</body>

</html>
