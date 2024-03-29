@extends('layouts.admin')

@section('crud')
    <h1>Toets bekijken</h1>
    <div class="row">
        <div class="value-inputs col-md-4">
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name ="type" disabled>
                    <option selected>{{ $test->type->name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="module">Vak</label>
                <select id="module" name="module" disabled>
                    <option selected>{{ $test->module->name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $test->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="grade">Cijfer</label>
                <input type="text" class="form-control" id="grade" name="grade" value="{{ $test->grade }}" disabled>
            </div>
            <div class="form-group">
                <label for="date">Datum</label>
                <input type="datetime-local" class="form-control" id="date" name="date" value="{{ date('Y-m-d\TH:i', strtotime($test->date)) }}" disabled>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="completed"  {{ $test->is_complete ? 'checked' : '' }} disabled>
                    <label class="custom-control-label" for="customCheck">Afgerond</label>
                </div>
            </div>
            <div class="form-group">
                @isset($test->file)
                    <a href="{{ asset('storage/'.$test->file) }}" class="btn btn-primary" download>Download file</a>
                @else
                    <p>Geen file geupload</p>
                @endisset
            </div>
        </div>
        <div class="col-md-2">
            <label for="tag" class="font-weight-bold">Tags</label>
            <table class="table table-fixed">
                <thead class="bg-success">
                <tr>
                    <th>Naam</th>
                </tr>
                </thead>
                <tbody>
                @foreach($test->tags as $tag)
                    <tr>
                        <td>{{ $tag->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
