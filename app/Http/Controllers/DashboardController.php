<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DashboardService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private DashboardService $dashboardService
    ) {}

    public function index(Request $request): View
    {
        $data = $this->dashboardService->getDashboardData($request->user());
        
        return view('dashboard', $data);
    }
}
