@extends('layouts.app')

@section('content')
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
        <h1>Toets bewerken</h1>
        <form action="{{ action('DeadlineController@update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $test->id }}">
            <div class="side">
                <div class="value-inputs">
                    </div>
                    <div class="form-group">
                        <label for="grade">Datum</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" value="{{ date('Y-m-d\TH:i', strtotime($test->date)) }}">
                    </div>
                    <div class="form-group">
                    </div>
                </div>
                <div class="tag-input">
                    <label for="tag">Tags</label>
                    <table class="table">
                        <thead>
                        <th>Naam</th>
                        <th>Actie</th>
                        </thead>
                        <tbody>
                        @foreach($test->tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}<input type="hidden" name="tags[]" value="{{ $tag->id }}"></td>
                                <td>
                                    <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="add d-flex">
                        <select class="form-control" id="tag">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-success ml-4" type="button"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
