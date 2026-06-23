<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FinSight - Guest Setup</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-background text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <div class="py-12 flex justify-center min-h-screen items-center" x-data="guestOnboarding()">
        <div class="max-w-4xl w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-card dark:bg-gray-800 overflow-hidden shadow-xl rounded-2xl p-8 text-center border border-gray-100 dark:border-gray-700">
                
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">Set Up Guest Mode</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-8 text-lg">Select your profile to load default categories. Your data will be saved only on this device.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Student -->
                    <label class="cursor-pointer">
                        <input type="radio" x-model="userType" value="Student" class="peer sr-only">
                        <div class="rounded-xl border-2 border-gray-200 dark:border-gray-700 p-6 hover:border-success peer-checked:border-success peer-checked:bg-green-50 dark:peer-checked:bg-gray-700 transition">
                            <div class="w-12 h-12 bg-green-100 text-success rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-xl mb-2">Student</h3>
                            <p class="text-sm text-gray-500">Track assignment costs, rent, and student life expenses.</p>
                        </div>
                    </label>

                    <!-- Employee -->
                    <label class="cursor-pointer">
                        <input type="radio" x-model="userType" value="Employee" class="peer sr-only">
                        <div class="rounded-xl border-2 border-gray-200 dark:border-gray-700 p-6 hover:border-success peer-checked:border-success peer-checked:bg-green-50 dark:peer-checked:bg-gray-700 transition">
                            <div class="w-12 h-12 bg-green-100 text-success rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-xl mb-2">Employee</h3>
                            <p class="text-sm text-gray-500">Manage salary, investments, and daily living costs.</p>
                        </div>
                    </label>

                    <!-- General User -->
                    <label class="cursor-pointer">
                        <input type="radio" x-model="userType" value="General User" class="peer sr-only">
                        <div class="rounded-xl border-2 border-gray-200 dark:border-gray-700 p-6 hover:border-success peer-checked:border-success peer-checked:bg-green-50 dark:peer-checked:bg-gray-700 transition">
                            <div class="w-12 h-12 bg-green-100 text-success rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-xl mb-2">General User</h3>
                            <p class="text-sm text-gray-500">Simple tracking for household and shopping expenses.</p>
                        </div>
                    </label>
                    
                </div>
                
                <div class="mt-8 flex justify-between items-center">
                    <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 font-medium">
                        &larr; Back
                    </a>
                    <button @click="completeSetup" :disabled="!userType" class="px-8 py-3 bg-success hover:bg-green-600 disabled:opacity-50 disabled:cursor-not-allowed text-white font-semibold rounded-lg shadow transition">
                        Start Tracking
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('guestOnboarding', () => ({
                userType: '',
                defaultCategories: {
                    'Student': [
                        { name: 'Food', type: 'expense', icon: 'food' },
                        { name: 'Transportation', type: 'expense', icon: 'bus' },
                        { name: 'Rent', type: 'expense', icon: 'home' },
                        { name: 'Assignment', type: 'expense', icon: 'book' },
                        { name: 'Organization', type: 'expense', icon: 'group' },
                        { name: 'Entertainment', type: 'expense', icon: 'film' },
                    ],
                    'Employee': [
                        { name: 'Salary', type: 'income', icon: 'briefcase' },
                        { name: 'Investment', type: 'expense', icon: 'chart-line' },
                        { name: 'Insurance', type: 'expense', icon: 'shield-check' },
                        { name: 'Transportation', type: 'expense', icon: 'car' },
                        { name: 'Entertainment', type: 'expense', icon: 'film' },
                    ],
                    'General User': [
                        { name: 'Shopping', type: 'expense', icon: 'shopping-bag' },
                        { name: 'Household', type: 'expense', icon: 'home' },
                        { name: 'Transportation', type: 'expense', icon: 'car' },
                        { name: 'Entertainment', type: 'expense', icon: 'film' },
                        { name: 'Others', type: 'expense', icon: 'dots-horizontal' },
                    ]
                },
                completeSetup() {
                    if (!this.userType) return;
                    
                    // Save to local storage
                    localStorage.setItem('finsight_guest_user_type', this.userType);
                    
                    // Initialize categories
                    if (!localStorage.getItem('finsight_guest_categories')) {
                        const categories = this.defaultCategories[this.userType].map((c, i) => ({ id: i + 1, ...c }));
                        localStorage.setItem('finsight_guest_categories', JSON.stringify(categories));
                    }
                    
                    // Initialize empty transactions and subscriptions
                    if (!localStorage.getItem('finsight_guest_transactions')) {
                        localStorage.setItem('finsight_guest_transactions', JSON.stringify([]));
                    }
                    if (!localStorage.getItem('finsight_guest_subscriptions')) {
                        localStorage.setItem('finsight_guest_subscriptions', JSON.stringify([]));
                    }
                    
                    // Redirect to dashboard (this route will need to be configured to handle guests later)
                    window.location.href = '/dashboard';
                }
            }))
        })
    </script>
</body>
</html>
