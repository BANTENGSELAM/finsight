<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FinSight - Understand where your money goes</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-background text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center p-4">
        
        <div class="text-center mb-10">
            <h1 class="text-5xl font-bold text-primary mb-2 tracking-tight">FinSight</h1>
            <p class="text-xl text-gray-600 dark:text-gray-400">Understand where your money goes.</p>
        </div>

        <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Cloud Mode Card -->
            <div class="bg-card dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 p-8 flex flex-col items-center text-center transition hover:shadow-2xl hover:-translate-y-1">
                <div class="w-16 h-16 bg-blue-50 text-primary dark:bg-gray-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3">Cloud Mode</h2>
                <p class="text-gray-500 dark:text-gray-400 mb-8 flex-grow">Sync your financial data across all your devices securely. Access your dashboard anywhere.</p>
                
                <div class="w-full space-y-3">
                    <a href="{{ route('login') }}" class="block w-full py-3 px-4 bg-primary hover:bg-blue-700 text-white font-semibold rounded-lg shadow transition">
                        Log In
                    </a>
                    <a href="{{ route('register') }}" class="block w-full py-3 px-4 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 font-semibold rounded-lg shadow-sm transition">
                        Create Account
                    </a>
                </div>
            </div>

            <!-- Guest Mode Card -->
            <div class="bg-card dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700 p-8 flex flex-col items-center text-center transition hover:shadow-2xl hover:-translate-y-1">
                <div class="w-16 h-16 bg-green-50 text-success dark:bg-gray-700 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-3">Guest Mode</h2>
                <p class="text-gray-500 dark:text-gray-400 mb-8 flex-grow">Start tracking immediately. No account required. All data is stored locally in your browser.</p>
                
                <div class="w-full mt-auto">
                    <a href="{{ route('onboarding.guest') }}" class="block w-full py-3 px-4 bg-success hover:bg-green-600 text-white font-semibold rounded-lg shadow transition">
                        Start Without Account
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
