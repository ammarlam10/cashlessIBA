<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Wallet;
use App\Transaction;
use App\Institute;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transactions = Transaction::where('from_id',Auth::user()->wallet_id)->orwhere('to_id',Auth::user()->wallet_id)->get();
            return view('transaction.index',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::all();
        return view('transaction.add',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $balance = Wallet::findOrFail(Auth::user()->wallet_id)->balance;
        $rBalance = Wallet::findOrFail($request->to_id)->balance;
        $amount = (int)$request->amount;
        if(($balance - $amount)<0){
         $messages = "you have insufficent balance in your account to proceed with this transaction";
         return redirect('transaction/create')->withErrors($messages);
         }
         else{
             Transaction::create([
                 'from_id'=>Auth::user()->wallet_id,
                 'to_id'=>$request->to_id,
                 'amount'=>$amount,
                 'description'=>$request->description

                ]);
             $wallet = Wallet::findOrFail(Auth::user()->wallet_id);
             $wallet->update(['balance'=>($balance-$amount)]);
             Wallet::findOrFail($request->to_id)->update(['balance'=>($rBalance+$amount)]);
             return redirect('transaction');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function institute(Request $request)
    {
         return $request;
        $balance = Wallet::findOrFail(Auth::user()->wallet_id)->institute_balance;

        $rBalance = Wallet::findOrFail($request->to_id)->balance;
        return '1';

        $amount = (int)$request->amount;
        if(($balance - $amount)<(-1)*Institute::findOrFail(Wallet::findOrFail(Auth::user()->wallet_id)->institute_id)){
         $messages = "you have insufficent balance in your account to proceed with this transaction";
         echo '2';
         return redirect('transaction/create')->withErrors($messages);
         }
         else{
            echo '3';
             Transaction::create([
                 'from_id'=>Auth::user()->wallet_id,
                 'to_id'=>$request->to_id,
                 'amount'=>$amount,
                 'description'=>$request->description

                ]);
             echo '4';
             $wallet = Wallet::findOrFail(Auth::user()->wallet_id);
             $wallet->update(['institute_balance'=>($balance-$amount)]);
             Wallet::findOrFail($request->to_id)->update(['balance'=>($rBalance+$amount)]);
             echo '5';
             return redirect('transaction');
         }
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
