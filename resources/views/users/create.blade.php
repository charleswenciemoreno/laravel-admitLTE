@extends('layouts.master')

@section('title', 'Create User')

@section('header_name', 'Create User')

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
            User successfully added.
        </div>
    @else 
        <div class="alert alert-danger" role="alert">
            Email already exists, please try another email.
        </div>
    @endif  

@endif

<div class="col-md-6">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstname">Firstname:
                    <span style="color:red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter firstname" maxlength="50" required>
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Lastname:
                    <span style="color:red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter lastname" maxlength="100" required>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address
            <span style="color:red;"><b>*</b></span>
            </label>
            <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
    

@endsection


@section('scripts')

@endsection