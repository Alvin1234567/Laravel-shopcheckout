@extends('layouts.master')

@section('content')

<h2>Transactions</h2>
<table class="table table-striped">
    <tr>
        <th>Produdct</th>
        <th>Qty</th>
        <th>Amount</th>
        <th>User</th>
        <th>Special</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    
    @foreach($transactions as $transaction)
        <tr>
            <td>{{$transaction->product->name}}</td>
            <td>{{$transaction->product_qty}}</td>
            <td>{{$transaction->total_amount}}</td>
            <td>{{$transaction->user->name}}</td>
            <td>{{$transaction->special}}</td>
            <td>
                {{ link_to_route('transactions.edit','Edit',array($transaction->id), array('class' => 'btn btn-primary'))}}
            </td>
            <td>
                {!! Form::open(array('route' => array('transactions.destroy', $transaction->id) ,'method' => 'delete')) !!}
                    {!! Form::token() !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
    {!! $transactions->links() !!}

    <h3>Users</h3>
    {!! Form::select('id', $users, null, array('class' => 'form-control', 'onchange'=>'window.location = /users/+this.value')) !!}
@endsection