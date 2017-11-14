<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transaction;
use App\Product;
use App\User;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = \App\Transaction::with(['user','product'])->orderBy('user_id','ASC')->paginate(6); #Transaction::all();
        $users = User::pluck('name','id');
        #return $transactions; JSON format
        return view('transactions.index',compact('transactions','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       # $products = Product::all();
        #$categories = Product::lists('name', 'id');
        $products = Product::pluck('name','id');
        $users = User::pluck('name','id');
        return view('transactions.create',compact('products','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->only('product_id','product_qty','user_id','special');
        $special = $request->get('special') == null ? 0 : request('special');
        $transaction = Transaction::create([
            'product_id' => request('product_id'),
            'product_qty' => request('product_qty'),
            'user_id' => request('user_id'),
            'special' => $special
        ]);

        return \Redirect::route('transactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $transaction = Transaction::find($id);
        $products = Product::pluck('name','id');
        $users = User::pluck('name','id');
        return view('transactions.edit',compact('transaction','products','users'));
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
        $data = $request->only('id','product_qty','product_id');
        $transaction = Transaction::find($id);
        $transaction->update($data);
        #return \Redirect::route('posts.edit',$id);
        return \Redirect::route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::destroy($id);
        return \Redirect::to('/transactions');
    }

}
