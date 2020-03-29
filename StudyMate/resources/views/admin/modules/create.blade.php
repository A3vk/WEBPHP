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
    <h1>Vak toevoegen</h1>
    <form action="{{ route('modules.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="value-inputs col-md-4">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="period">Periode</label>
                    <input type="number" class="form-control" id="period" name="period" min="1" max="4" value="1">
                </div>
                <div class="form-group">
                    <label for="block">Blok</label>
                    <input type="number" class="form-control" id="block" name="block" min="1" max="16" value="1">
                </div>
                <div class="form-group">
                    <label for="grade">Cijfer</label>
                    <input type="text" class="form-control" id="grade" name="grade" min="1" max="16">
                </div>
                <div class="form-group">
                    <label for="total_credits">Te behalen studiepunten</label>
                    <input type="number" class="form-control" id="total_credits" name="total_credits" min="1" value="1">
                </div>
                <div class="form-group">
                    <label for="obtained_credits">Behaalde studiepunten</label>
                    <input type="number" class="form-control" id="obtained_credits" name="obtained_credits" min="0" value="0">
                </div>
            </div>
            <div class="teacher-input col-md-6">
                <label>Docenten</label>
                <table class="table table-fixed">
                    <thead class="bg-success">
                    <tr>
                        <th>Naam</th>
                        <th>Coordinator</th>
                        <th>Mijn docent</th>
                        <th>acties</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <div class="add d-flex">
                    <select class="form-control">
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->fullName() }}</option>
                        @endforeach
                    </select>
                    <button  class="btn btn-success ml-2" type="button"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
