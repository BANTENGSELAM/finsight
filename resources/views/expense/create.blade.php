<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-6 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <a href="{{ route('expense.index') }}" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </a>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Add Expense</h2>
                </div>
            </div>

            <div class="bg-card dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-100 dark:border-gray-700">
                <div class="p-6 sm:p-8 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('expense.store') }}" class="space-y-6">
                        @csrf

                        {{-- Category --}}
                        <div>
                            <x-input-label for="category_id" value="Category" />
                            <select id="category_id" name="category_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary dark:focus:border-primary focus:ring-primary dark:focus:ring-primary rounded-md shadow-sm" required autofocus>
                                <option value="" disabled selected>Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />

                            @if($categories->isEmpty())
                                <p class="text-sm text-warning mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    You don't have any expense categories yet.
                                </p>
                            @endif
                        </div>

                        {{-- Amount --}}
                        <div>
                            <x-input-label for="amount" value="Amount" />
                            <div class="relative mt-1">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500">
                                    $
                                </div>
                                <x-text-input id="amount" class="block w-full pl-8" type="number" step="0.01" min="0.01" name="amount" :value="old('amount')" required placeholder="0.00" />
                            </div>
                            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                        </div>

                        {{-- Date --}}
                        <div>
                            <x-input-label for="transaction_date" value="Transaction Date" />
                            <x-text-input id="transaction_date" class="block mt-1 w-full" type="date" name="transaction_date" :value="old('transaction_date', date('Y-m-d'))" required />
                            <x-input-error :messages="$errors->get('transaction_date')" class="mt-2" />
                        </div>

                        {{-- Description --}}
                        <div>
                            <x-input-label for="description" value="Description (Optional)" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" placeholder="e.g. Grocery run" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                            <a href="{{ route('expense.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mr-4">
                                Cancel
                            </a>
                            <x-primary-button>
                                {{ __('Save Expense') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
