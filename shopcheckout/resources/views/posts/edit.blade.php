@extends('layouts.master')

@section('content')
<h2>Edit Post</h2>
{!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'put')) !!}
    <div class="form-group">
        {!! Form::label('body') !!}
        {!! Form::text('title', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body') !!}
        {!! Form::textarea('body', null, array('class' => 'form-control', 'size' => '50x3')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
{!! Form::close() !!}
@endsection
