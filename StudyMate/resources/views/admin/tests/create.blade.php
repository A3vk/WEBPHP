@extends('layouts.admin')

@section('crud')
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
    <form action="{{ route('tests.store') }}" method="POST">
        @csrf
        <div class="side">
            <div class="value-inputs">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select id="type" name ="type">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="module">Vak</label>
                    <select id="module" name="module">
                        @foreach($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="grade">Cijfer</label>
                    <input type="text" class="form-control" id="grade" name="grade">
                </div>
                <div class="form-group">
                    <label for="grade">Datum</label>
                    <input type="datetime-local" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="completed">
                        <label class="custom-control-label" for="customCheck">Afgerond</label>
                    </div>
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
                    </tbody>
                </table>
                <div class="add">
                    <select id="tag">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-success" type="button"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
