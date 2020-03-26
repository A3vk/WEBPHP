@extends('layouts.admin')

@section('crud')
    <div class="col-md-4">
        <form action="../tests" method="POST">
            <div class="form-group">
                <label for="firstName">Email address</label>
                <input type="text" class="form-control" id="firstName" placeholder="John">
            </div>
            <div class="form-group">
                <label for="lastName">Password</label>
                <input type="text" class="form-control" id="lastName" placeholder="Doe">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
