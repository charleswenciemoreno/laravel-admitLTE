@extends('layouts.master')

@section('title', 'Inventory')
@section('header_name', 'Inventory List')

@section('content')

<div class="block-header">
    <div class="row">
        <div class="col">
                <a href="{{url('inventory/create')}}" class="btn btn-sm btn-primary float-right"><i class="fa fa-plus"></i> Create</a>
        </div>
    </div>
</div>

<hr>
<table class="table table-sm">
    <thead class="thead-light">
    <tr>
        <th>ID#</th>
        <th>Name</th>
    </tr>
    </thead>

    <tbody>
        @foreach($inventories as $inventory)
        <tr>
            <td>{{ $inventory->id }}</td>
            <td>{{ $inventory->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

