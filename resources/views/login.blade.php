<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Bilaa's Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50 flex items-center justify-center min-h-screen p-4">

    <div
        class="bg-white p-10 rounded-[2.5rem] shadow-2xl shadow-pink-100 w-full max-w-md border border-pink-50 relative overflow-hidden">
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-pink-100 rounded-full opacity-50"></div>
        <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-rose-100 rounded-full opacity-50"></div>

        <div class="relative z-10">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-black text-pink-500 italic">Bilaa's<span class="text-slate-800">Admin</span>
                </h1>
                <p class="text-slate-400 text-sm mt-2">Silakan masuk untuk mengelola toko ✨</p>
            </div>

            @if ($errors->any())
                <div
                    class="bg-red-50 border border-red-100 text-red-600 px-4 py-3 rounded-2xl mb-6 text-sm flex items-center gap-2">
                    <span>⚠️</span> {{ $errors->first('email') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-slate-700 ml-1 mb-2">Email Address</label>
                    <input type="email" name="email" required
                        class="block w-full px-5 py-4 bg-pink-50/50 border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 focus:bg-white outline-none transition-all duration-300 placeholder:text-slate-300"
                        placeholder="admin@bilaa.com">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 ml-1 mb-2">Password</label>
                    <input type="password" name="password" required
                        class="block w-full px-5 py-4 bg-pink-50/50 border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 focus:bg-white outline-none transition-all duration-300 placeholder:text-slate-300"
                        placeholder="••••••••">
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-pink-500 to-rose-400 hover:from-pink-600 hover:to-rose-500 text-white font-bold py-4 rounded-2xl shadow-lg shadow-pink-200 hover:shadow-pink-300 hover:-translate-y-1 transition duration-300">
                        Masuk Sekarang 🎀
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <a href="/"
                    class="text-xs text-slate-400 hover:text-pink-500 transition underline decoration-pink-200">
                    ← Kembali ke Website
                </a>
            </div>
        </div>
    </div>

</body>

</html>
