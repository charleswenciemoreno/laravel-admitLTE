@extends('layouts.master')

@section('title', 'Create Product')

@section('header_name', 'Create Product')

@section('content')


<div class="block-header">
    <div class="row">
        <div class="col">
            <a href="{{url('users')}}" class="btn btn-sm btn-primary float-right"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
<hr>


@if (!empty(session()->get('status'))) 
    
    @if (session()->get('status') == 'success')
        <div class="alert alert-success" role="alert">
            Product successfully added.
        </div>
    @else 
        <div class="alert alert-danger" role="alert">
            Product name already exists, please try different name.
        </div>
    @endif  

@endif

<div class="col-md-6">
    <form method="POST" action="{{ route('inventory.store') }}">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="name">Name:
                    <span style="color:red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" maxlength="50" required>
            </div>
            <div class="form-group col-md-4">
                <label for="quantity">Quantity:
                    <span style="color:red;"><b>*</b></span>
                </label>
                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity" maxlength="100" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
    

@endsection


@section('scripts')

@endsection