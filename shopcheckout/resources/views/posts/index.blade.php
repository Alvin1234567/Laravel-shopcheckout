@extends('layouts.master')

@section('content')

<h2>Post</h2>
<table class="table table-striped">
    <tr>
        <th>Title</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>
                {{ link_to_route('posts.edit','Edit',array($post->id), array('class' => 'btn btn-primary'))}}
            </td>
            <td>
                {!! Form::open(array('route' => array('posts.destroy', $post->id) ,'method' => 'delete')) !!}
                    {!! Form::token() !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
    {!! $posts->links() !!}
@endsection