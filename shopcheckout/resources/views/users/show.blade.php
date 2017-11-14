@extends('layouts.master')

@section('content')

<h2>{!! $user->name !!}</h2><h3>Transcaction History</h3>

    <table class="table table-striped">
        <tr>
            <th>Transaction Id</th>
            <th>Prodcut</th>
            <th>Qty</th>
            <th>Special</th>
            <th>Transaction Time</th>
            <th>Paid</th>
            <th>&nbsp;</th>
        </tr>

    @foreach($user_transactions as $user_transaction)

        <tr>
            <td>{{$user_transaction->id}}</td>
            <td>{{$user_transaction->product_id}}</td>
            <td>{{$user_transaction->product_qty}}</td>
            <td>{{$user_transaction->special}}</td>
            <td>{{$user_transaction->created_at}}</td>
            <td>{{$user_transaction->paid}}</td>
            <td> {{ link_to_route('transactions.edit','View',array($user_transaction->id), array('class' => 'btn btn-primary'))}}</td>
        </tr>

    @endforeach
            
    </table>

<h2>Amount Due</h2>

    {!! $amount_due !!}

@endsection
