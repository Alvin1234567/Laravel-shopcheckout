@extends('layouts.master')

@section('content')

<h2>Users</h2>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>&nbsp;</th>
    </tr>
    
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td> {{ link_to_route('users.show','View Transactions',array($user->id), array('class' => 'btn btn-primary'))}}</td>
        </tr>
    @endforeach
</table>
    {!! $users->links() !!}

@endsection