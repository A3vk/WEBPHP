@extends('layouts.app')

@section('content')
    <div>
        @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-fixed">
            <thead class="bg-success">
            <tr>
                <th scope="col">
                    <a class="btn btn-success" href="/deadline/index?sort=is_complete">Afgerond</a>
                </th>
                <th scope="col">
                    <a class="btn btn-success" href="/deadline/index?sort=module">Vak</a>
                </th>
                <th scope="col">
                    <a class="btn btn-success" href="/deadline/index?sort=type">Type</a>
                </th>
                <th scope="col">
                    <a class="btn btn-success" href="/deadline/index?sort=name">Naam</a>
                </th>
                <th scope="col">
                    <a class="btn btn-success" href="/deadline/index?sort=teacher">Docent</a>
                </th>
                <th scope="col">
                    <a class="btn btn-success" href="/deadline/index?sort=date">Datum</a>
                </th>
                <th scope="col">
                    <a class="btn btn-succes">Acties</a>
                </th>
            </tr>
            </thead>
            <tbody>
                    @foreach($tests as $test)
                        <tr>
                            <td>
                                <form action="{{ action('DeadlineController@save') }}" method="POST" id = completeForum>
                                    @csrf
                                    <input type="checkbox" id="Check" name="completed"  {{ $test->is_complete ? 'checked' : '' }}>
                                    <input type="hidden" name="id" value="{{ $test->id }}">
                                </form>
                            </td>
                            <td>{{ $test->module->name }}</td>
                            <td>{{ $test->type->name }}</td>
                            <td>{{ $test->name }}</td>
                            @foreach($test->module->teachers as $teacher)
                            @if ( $teacher->pivot->is_my_teacher === 1 )
                                <td>{{ $teacher->fullName() }}</td>
                            @endif
                            @endforeach
                            <td>{{ date('d-m-Y\ H:i', strtotime($test->date))}}</td>
                            <td class="d-flex">
                                <a class="btn btn-success" dusk="show" href="/deadline/show?id={{ $test->id }}"><i class="far fa-eye"></i></a>
                                <a class="btn btn-warning ml-1" dusk="edit" href="/deadline/edit?id={{ $test->id }}"><i class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection