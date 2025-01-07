<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">

    <div class="flex items-center justify-center min-h-screen">
        @if (Route::has('login'))
        <div class="fixed top-0 right-0 p-6 text-right">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-400">Dashboard</a>
            @else
            <a href="{{ route('login') }}">
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </a>
            @endauth
        </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-16 w-auto">
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <a href="#" class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg flex items-center">
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Apriori Santri</h2>
                        <p class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Metode Apriori adalah algoritma yang digunakan dalam data mining untuk menemukan asosiasi atau hubungan antar item dalam dataset yang besar.
                        </p>
                    </div>
                </a>

                <a href="#" class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg flex items-center">
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Sejarah Pondok Pesantren Jenes</h2>
                        <p class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Pada tahun 1932 M, Pondok Pesantren Jenes didirikan oleh K.H. Thoyyib dengan jumlah santri sekitar 40 orang.
                        </p>
                    </div>
                </a>
            </div>

            <div class="flex justify-center mt-16 text-sm text-gray-500 dark:text-gray-400">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</body>
</html>
