@extends('layouts.master')

@section('title', 'Users')
@section('header_name', 'Users List')

@section('content')

<div class="block-header">
    <div class="row">
        <div class="col">
                <a href="{{url('users/create')}}" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Create</a>
        </div>
    </div>
</div>

<hr>
<table class="table table-sm">
    <thead class="thead-light">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created Date</th>
    </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection


@section('scripts')
	<script>
		$(document).ready(function() {
		});

	</script>
@endsection