<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Transaction;
use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function __construct(protected TransactionService $transactionService)
    {
    }

    public function index(Request $request)
    {
        $expenses = $this->transactionService->getExpenses(Auth::user(), $request->input('search'));
        return view('expense.index', compact('expenses'));
    }

    public function create()
    {
        $categories = $this->transactionService->getExpenseCategories(Auth::user());
        return view('expense.create', compact('categories'));
    }

    public function store(StoreExpenseRequest $request)
    {
        $this->transactionService->createExpense(Auth::user(), $request->validated());
        return redirect()->route('expense.index')->with('success', 'Expense record created successfully.');
    }

    public function edit(Transaction $expense)
    {
        if ($expense->user_id !== Auth::id() || $expense->type !== 'expense') {
            abort(403);
        }

        $categories = $this->transactionService->getExpenseCategories(Auth::user());
        return view('expense.edit', compact('expense', 'categories'));
    }

    public function update(UpdateExpenseRequest $request, Transaction $expense)
    {
        if ($expense->user_id !== Auth::id() || $expense->type !== 'expense') {
            abort(403);
        }

        $this->transactionService->updateExpense($expense, $request->validated());
        return redirect()->route('expense.index')->with('success', 'Expense record updated successfully.');
    }

    public function destroy(Transaction $expense)
    {
        if ($expense->user_id !== Auth::id() || $expense->type !== 'expense') {
            abort(403);
        }

        $this->transactionService->deleteExpense($expense);
        return redirect()->route('expense.index')->with('success', 'Expense record deleted successfully.');
    }
}
