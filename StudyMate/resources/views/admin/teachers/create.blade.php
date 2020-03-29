@extends('layouts.admin')

@section('crud')
    <div class="col-md-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
        @endif
        <h1>Docent toevoegen</h1>
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">Voornaam</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name">
            </div>
            <div class="form-group">
                <label for="last_name">Achternaam</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
