@extends('layouts.master')

@section('content')
<h2>Creat Post</h2>
{!! Form::open(array('route' => 'posts.store')) !!}
    <div class="form-group">
        {!! Form::label('body') !!}
        {!! Form::text('title', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body') !!}
        {!! Form::textarea('body', null, array('class' => 'form-control', 'size' => '50x3')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
{!! Form::close() !!}
@endsection
