<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserTypeRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnboardingController extends Controller
{
    /**
     * Show the user type selection form for Cloud Mode.
     */
    public function show()
    {
        return view('onboarding.user-type');
    }

    /**
     * Store the selected user type and seed default categories.
     */
    public function store(StoreUserTypeRequest $request, CategoryService $categoryService)
    {
        $user = Auth::user();
        
        $user->update([
            'user_type' => $request->validated('user_type')
        ]);

        // Seed default categories
        $categoryService->seedDefaultCategories($user);

        return redirect()->route('dashboard');
    }

    /**
     * Show the Guest Mode onboarding UI.
     */
    public function guest()
    {
        return view('onboarding.guest');
    }
}
