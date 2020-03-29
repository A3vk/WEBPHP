@extends('layouts.admin')

@section('crud')
    <div class="col-md-4">
        <h1>Docent Bekijken</h1>
        <div class="form-group">
            <label for="first_name">Voornaam</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $teacher->first_name }}" disabled>
        </div>
        <div class="form-group">
            <label for="last_name">Achternaam</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $teacher->last_name }}" disabled>
        </div>
    </div>
@endsection
