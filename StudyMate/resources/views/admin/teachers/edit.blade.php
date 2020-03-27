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
        <h1>Docent bewerken</h1>
        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="first_name">Voornaam</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $teacher->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Achternaam</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $teacher->last_name }}">
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
