<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Transaction;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(2);
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $user_transactions = User::find($id)->transactions;
        $amount_due = $this->amount_due($id);
        return view('users.show',compact('user','user_transactions','amount_due'));
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

    /**
     * calculate due amount based on transactions
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function amount_due($id)
    {
        $user = User::find($id);
        $transactions = \App\Transaction::with(['user','product'])
                        ->where('user_id','=',$id)
                        ->where('paid','=','0')
                        ->get();
        $total = 0;
        foreach ($transactions as $transaction)
        {
            if(!$transaction->special)
            {
                $total += $transaction->product->price * $transaction->product_qty;
            }
            else
            {
                $special = json_decode($transaction->product->special_offer_formula);
                $total +=  ($transaction->product_qty -
                           floor($transaction->product_qty/($special->buy)) * ( $special->buy-$special->pay)) 
                           * $transaction->product->price;
            }
            
        }
        return $total;
    }

}
