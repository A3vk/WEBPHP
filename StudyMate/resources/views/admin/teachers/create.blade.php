@extends('layouts.admin')

@section('crud')
    <div class="col-md-4">
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">Voornaam</label>
                <input type="text" class="form-control" name="firstName" placeholder="John">
            </div>
            <div class="form-group">
                <label for="lastName">Achternaam</label>
                <input type="text" class="form-control" name="lastName" placeholder="Doe">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
