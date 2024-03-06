<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseTrackingController extends Controller
{
  /**
   * Display a listing of the resource.
   */

  public function index()
  {
    $saldo = 30000;

    return view('index', ['expenses' => config('global.expenses'), 'saldo' => $saldo]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    array_push($expenses, [5, $request->input('jenis'), $request->input('nama'), $request->input('jumlah')]);

    return redirect()->route('expense.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $expense = [1, 'debit', 'Makan Pagi', 10000];
    return view('show', ['expense' => $expense]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $expense = [1, 'debit', 'Makan Pagi', 10000];
    return view('edit', ['expense' => $expense]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    return redirect()->route('expense.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
