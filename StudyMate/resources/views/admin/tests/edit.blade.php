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
        <form action="{{ route('tests.update', $test->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
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
                    <label for="file">Bestand</label>
                    <div class="custom-file overflow-hidden">
                        <input type="file" class="custom-file-input" id="file" name="file" accept=".zip,.rar,.7zip">
                        <label class="custom-file-label" for="file" aria-describedby="file-helper">Choose file...</label>
                    </div>
                    <small id="file-helper" class="text-muted">
                        Als je hier een nieuwe file upload wordt de oude overschreven!
                    </small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
