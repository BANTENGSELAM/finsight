<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Models\Transaction;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function __construct(protected TransactionService $transactionService)
    {
    }

    public function index(Request $request)
    {
        $incomes = $this->transactionService->getIncomes(Auth::user(), $request->input('search'));
        return view('income.index', compact('incomes'));
    }

    public function create()
    {
        $categories = $this->transactionService->getIncomeCategories(Auth::user());
        return view('income.create', compact('categories'));
    }

    public function store(StoreIncomeRequest $request)
    {
        $this->transactionService->createIncome(Auth::user(), $request->validated());
        return redirect()->route('income.index')->with('success', 'Income record created successfully.');
    }

    public function edit(Transaction $income)
    {
        if ($income->user_id !== Auth::id() || $income->type !== 'income') {
            abort(403);
        }

        $categories = $this->transactionService->getIncomeCategories(Auth::user());
        return view('income.edit', compact('income', 'categories'));
    }

    public function update(UpdateIncomeRequest $request, Transaction $income)
    {
        if ($income->user_id !== Auth::id() || $income->type !== 'income') {
            abort(403);
        }

        $this->transactionService->updateIncome($income, $request->validated());
        return redirect()->route('income.index')->with('success', 'Income record updated successfully.');
    }

    public function destroy(Transaction $income)
    {
        if ($income->user_id !== Auth::id() || $income->type !== 'income') {
            abort(403);
        }

        $this->transactionService->deleteIncome($income);
        return redirect()->route('income.index')->with('success', 'Income record deleted successfully.');
    }
}
