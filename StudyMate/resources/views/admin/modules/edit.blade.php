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
        <h1>Vak bewerken</h1>
        <form action="{{ route('modules.update', $module->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="side">
                <div class="value-inputs">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" name="name" value="{{ $module->name }}">
                    </div>
                    <div class="form-group">
                        <label for="period">Periode</label>
                        <input type="number" class="form-control" name="period" min="1" max="4"  value="{{ $module->period }}">
                    </div>
                    <div class="form-group">
                        <label for="block">Blok</label>
                        <input type="number" class="form-control" name="block" min="1" max="16" value="{{ $module->block }}">
                    </div>
                    <div class="form-group">
                        <label for="total_credits">Te behalen studiepunten</label>
                        <input type="number" class="form-control" name="total_credits" min="1" value="{{ $module->total_credits }}">
                    </div>
                    <div class="form-group">
                        <label for="obtained_credits">Behaalde studiepunten</label>
                        <input type="number" class="form-control" name="obtained_credits" min="0" value="{{ $module->obtained_credits }}">
                    </div>
                </div>
                <div class="teacher-input">
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
    </div>
@endsection
