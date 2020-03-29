@extends('layouts.admin')

@section('crud')
    <div class="col-md-4">
        <h1>Vak bekijken</h1>
        <div class="side">
            <div class="value-inputs">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $module->name }}" disabled>
                </div>
                <div class="form-group">
                    <label for="period">Periode</label>
                    <input type="number" class="form-control" id="period" name="period" min="1" max="4"  value="{{ $module->period }}" disabled>
                </div>
                <div class="form-group">
                    <label for="block">Blok</label>
                    <input type="number" class="form-control" id="block" name="block" min="1" max="16" value="{{ $module->block }}" disabled>
                </div>
                <div class="form-group">
                    <label for="grade">Cijfer</label>
                    <input type="text" class="form-control" id="grade" name="block" min="1" max="16" value="{{ $module->grade }}" disabled>
                </div>
                <div class="form-group">
                    <label for="total_credits">Te behalen studiepunten</label>
                    <input type="number" class="form-control" id="total_credits" name="total_credits" min="1" value="{{ $module->total_credits }}" disabled>
                </div>
                <div class="form-group">
                    <label for="obtained_credits">Behaalde studiepunten</label>
                    <input type="number" class="form-control" id="obtained_credits" name="obtained_credits" min="0" value="{{ $module->obtained_credits }}" disabled>
                </div>
            </div>
            <div>
                <label>Docenten</label>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Coordinator</th>
                        <th>Mijn docent</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($module->teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->fullName() }}</td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="coordinator{{ $teacher->id }}" name="coordinator"{{ $teacher->pivot->is_coordinator == 1 ? 'checked' : '' }} disabled>
                                    <label class="custom-control-label ml-4" for="coordinator{{ $teacher->id }}"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="teacher{{ $teacher->id }}" name="teacher" {{ $teacher->pivot->is_my_teacher ? 'checked' : '' }} disabled>
                                    <label class="custom-control-label ml-4" for="teacher{{ $teacher->id }}"></label>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
