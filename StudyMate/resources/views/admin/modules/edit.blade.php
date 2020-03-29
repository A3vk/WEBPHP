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
    <h1>Vak bewerken</h1>
    <form action="{{ route('modules.update', $module->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="value-inputs col-md-4">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $module->name }}">
                </div>
                <div class="form-group">
                    <label for="period">Periode</label>
                    <input type="number" class="form-control @error('period') is-invalid @enderror" id="period" name="period" min="1" max="4"  value="{{ $module->period }}">
                </div>
                <div class="form-group">
                    <label for="block">Blok</label>
                    <input type="number" class="form-control @error('block') is-invalid @enderror" id="block" name="block" min="1" max="16" value="{{ $module->block }}">
                </div>
                <div class="form-group">
                    <label for="grade">Cijfer</label>
                    <input type="text" class="form-control @error('grade') is-invalid @enderror" id="grade" name="grade" min="1" max="16" value="{{ $module->grade }}">
                </div>
                <div class="form-group">
                    <label for="total_credits">Te behalen studiepunten</label>
                    <input type="number" class="form-control @error('total_credits') is-invalid @enderror" id="total_credits" name="total_credits" min="1" value="{{ $module->total_credits }}">
                </div>
                <div class="form-group">
                    <label for="obtained_credits">Behaalde studiepunten</label>
                    <input type="number" class="form-control @error('obtained_credits') is-invalid @enderror" id="obtained_credits" name="obtained_credits" min="0" value="{{ $module->obtained_credits }}">
                </div>
            </div>
            <div class="teacher-input col-md-6">
                <label for="teacher" class="font-weight-bold">Docenten</label>
                <table class="table table-fixed">
                    <thead class="bg-success">
                    <tr>
                        <th>Naam</th>
                        <th>Coordinator</th>
                        <th>Mijn docent</th>
                        <th>acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($module->teachers as $teacher)
                        <tr id="{{ $teacher->id }}">
                            <td>{{ $teacher->fullName() }}<input type="hidden" name="teachers[]" value="{{ $teacher->id }}"></td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="coordinator{{ $teacher->id }}" name="coordinator" value="{{ $teacher->id }}" {{ $teacher->pivot->is_coordinator == 1 ? 'checked' : '' }}>
                                    <label class="custom-control-label ml-4" for="coordinator{{ $teacher->id }}"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="teacher{{ $teacher->id }}" name="teacher" value="{{ $teacher->id }}" {{ $teacher->pivot->is_my_teacher ? 'checked' : '' }}>
                                    <label class="custom-control-label ml-4" for="teacher{{ $teacher->id }}"></label>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="add d-flex">
                    <select id="teacher" class="form-control">
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
