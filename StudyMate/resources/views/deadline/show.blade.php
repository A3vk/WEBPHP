@extends('layouts.app')

@section('content')
    <div class="col-md-4">
        <h1>Toets bekijken</h1>
        <div class="side">
            <div class="value-inputs">
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
            </div>
            <div>
                <label for="tag">Tags</label>
                <table class="table">
                    <thead>
                    <th>Naam</th>
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
    </div>
@endsection
