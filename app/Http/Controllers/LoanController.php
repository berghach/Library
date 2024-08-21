<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Http\Requests\StoreLoanRequest;
use App\Http\Requests\UpdateLoanRequest;
use App\Models\Book;
use App\Models\User;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLoanRequest $request, User $user, Book $book)
    {
        $loan = Loan::create($request->validated());

        $loan->user()->associate($user);
        $loan->book()->associate($book);
        $loan->save();

        return redirect()->route('loans.index')->with('success', 'Loan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        return view('loans.edit', compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoanRequest $request, Loan $loan)
    {
        $loan->update($request->validated());

        return redirect()->route('loans.index')->with('success', 'Loan updated successfully.');
    }
    public function returnBook(Loan $loan)
    {
        if (now()->greaterThan($loan->return_date)) {

            $daysLate = now()->diffInDays($loan->return_date);
    
            $loan->update([
                'is_returned' => true,
                'late_fees' => 5 * $daysLate,
            ]);
        } else {
            $loan->update(['is_returned' => true]);
        }
        
        return redirect()->route('loans.index')->with('success', 'The book is returned');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loans.index')->with('success', 'Loan deleted successfully.');
    }
}
