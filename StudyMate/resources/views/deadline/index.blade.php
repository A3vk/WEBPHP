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
                    <a href="/deadline/index?sort=is_complete">Afgerond</a>
                </th>
                <th scope="col">
                    <a href="/deadline/index?sort=module">Vak</a>
                </th>
                <th scope="col">
                    <a href="/deadline/index?sort=type">Type</a>
                </th>
                <th scope="col">
                    <a href="/deadline/index?sort=name">Naam</a>
                </th>
                <th scope="col">
                    <a href="/deadline/index?sort=teacher">Docent</a>
                </th>
                <th scope="col">
                    <a href="/deadline/index?sort=date">Datum</a>
                </th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
                <form action="{{ action('DeadlineController@save') }}" method="POST">
                    {{csrf_field()}}
                    @foreach($tests as $test)
                        <tr>
                            <td>
                                <input class="" type="checkBox" id="teacher{{ $test->id }}" name="test" value="{{ $test->id }}" {{ $test->is_complete ? 'checked' : '' }}>
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
                                <a class="btn btn-success" href="{{ route('tests.show', $test->id) }}"><i class="far fa-eye"></i></a>
                                <a class="btn btn-warning ml-1" href="#"><i class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </form>
            </tbody>
        </table>
    </div>
@endsection