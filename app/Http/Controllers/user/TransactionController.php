<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
   public function transaction()
   {
    return view('user.transaction');
   }
   public function createTransaction(Request $request)
   {
    $request->validate([          
        'status' => 'required',
        'fare_amount' => 'required',
       ]);
      Transaction::create($request->all());
       return redirect()->route('home')
       ->with('success','created successfully.');
   }
}
