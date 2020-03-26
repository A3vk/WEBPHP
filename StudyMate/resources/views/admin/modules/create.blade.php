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
    <form action="{{ route('modules.store') }}" method="POST">
        @csrf
        <div class="side">
            <div class="value-inputs">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="period">Periode</label>
                    <input type="number" class="form-control" name="period" min="1" max="4" value="1">
                </div>
                <div class="form-group">
                    <label for="block">Blok</label>
                    <input type="number" class="form-control" name="block" min="1" max="16" value="1">
                </div>
                <div class="form-group">
                    <label for="total_credits">Te behalen studiepunten</label>
                    <input type="number" class="form-control" name="total_credits" min="1" value="1">
                </div>
                <div class="form-group">
                    <label for="obtained_credits">Behaalde studiepunten</label>
                    <input type="number" class="form-control" name="obtained_credits" min="0" value="0">
                </div>
            </div>
            <div class="flexible-input">
                <label>Docenten</label>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Coordinator</th>
                        <th>Mijn docent</th>
                        <th>acties</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <div class="add">
                    <select>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->fullName() }}</option>
                        @endforeach
                    </select>
                    <button  class="btn btn-success" type="button"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
