<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-card dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8 text-center">
                
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">Welcome to FinSight!</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-8 text-lg">To provide you with the best experience, please tell us how you'll be using FinSight.</p>
                
                <form method="POST" action="{{ route('onboarding.store') }}" class="space-y-8">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <!-- Student -->
                        <label class="cursor-pointer">
                            <input type="radio" name="user_type" value="Student" class="peer sr-only" required>
                            <div class="rounded-xl border-2 border-gray-200 dark:border-gray-700 p-6 hover:border-primary peer-checked:border-primary peer-checked:bg-blue-50 dark:peer-checked:bg-gray-700 transition">
                                <div class="w-12 h-12 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
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
                            <input type="radio" name="user_type" value="Employee" class="peer sr-only" required>
                            <div class="rounded-xl border-2 border-gray-200 dark:border-gray-700 p-6 hover:border-primary peer-checked:border-primary peer-checked:bg-blue-50 dark:peer-checked:bg-gray-700 transition">
                                <div class="w-12 h-12 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
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
                            <input type="radio" name="user_type" value="General User" class="peer sr-only" required>
                            <div class="rounded-xl border-2 border-gray-200 dark:border-gray-700 p-6 hover:border-primary peer-checked:border-primary peer-checked:bg-blue-50 dark:peer-checked:bg-gray-700 transition">
                                <div class="w-12 h-12 bg-blue-100 text-primary rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-xl mb-2">General User</h3>
                                <p class="text-sm text-gray-500">Simple tracking for household and shopping expenses.</p>
                            </div>
                        </label>
                        
                    </div>
                    
                    <x-input-error :messages="$errors->get('user_type')" class="mt-2" />

                    <div class="mt-8">
                        <x-primary-button class="w-full md:w-auto px-8 py-3 text-lg">
                            {{ __('Complete Setup') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
