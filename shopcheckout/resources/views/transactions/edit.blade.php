@extends('layouts.master')

@section('content')
<h2>Edit Transaction</h2>
{!! Form::model($transaction, array('route' => array('transactions.update', $transaction->id), 'method' => 'put')) !!}
    <div>
        {!! Form::label('Product') !!}
        {!! Form::select('product_id', $products, null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Qty') !!}
        {!! Form::textarea('product_qty', null, array('class' => 'form-control', 'size' => '50x3')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('User') !!}
        {!! Form::select('user_id', $users, null, array('class' => 'form-control')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
{!! Form::close() !!}
@endsection
