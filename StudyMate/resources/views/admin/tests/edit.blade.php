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
        <h1>Toets bewerken</h1>
        <form action="{{ route('tests.update', $test->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="side">
                <div class="value-inputs">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select id="type" name ="type">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ $test->type == $type ? 'selected' : '' }}>{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="module">Vak</label>
                        <select id="module" name="module">
                            @foreach($modules as $module)
                                <option value="{{ $module->id }}" {{ $test->module == $module ? 'selected' : '' }}>{{ $module->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $test->name }}">
                    </div>
                    <div class="form-group">
                        <label for="grade">Cijfer</label>
                        <input type="text" class="form-control" id="grade" name="grade" value="{{ $test->grade }}">
                    </div>
                    <div class="form-group">
                        <label for="grade">Datum</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" value="{{ date('Y-m-d\TH:i', strtotime($test->date)) }}">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="completed"  {{ $test->is_complete ? 'checked' : '' }}>
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
    </div>
@endsection
