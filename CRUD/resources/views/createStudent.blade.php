@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Add New Student</div>
        <div class="card-body">
            <form action="{{ route('store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="xyz@email.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Phone Number</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="01XXXXXXXXX">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection