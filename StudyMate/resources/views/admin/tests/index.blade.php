@extends('layouts.admin')

@section('crud')
    <div>
        @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a class="btn btn-success mb-3 add-item float-right" href="{{ route('tests.create') }}"><i class="fas fa-plus"></i>Toevoegen</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-fixed">
            <thead class="bg-success">
            <tr>
                <th scope="col">id</th>
                <th scope="col">vak</th>
                <th scope="col">naam</th>
                <th scope="col">type</th>
                <th scope="col">datum</th>
                <th scope="col">cijfer</th>
                <th scope="col">afgerond</th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tests as $test)
                <tr>
                    <th scope="row">{{ $test->id }}</th>
                    <td>{{ $test->module->name }}</td>
                    <td>{{ $test->name }}</td>
                    <td>{{ $test->type->name }}</td>
                    <td>{{ $test->date }}</td>
                    <td>{{ $test->grade }}</td>
                    <td>{{ $test->is_complete ? 'Ja' : 'Nee' }}</td>
                    <td class="d-flex">
                        <a class="btn btn-success" href="{{ route('tests.show', $test->id) }}"><i class="far fa-eye"></i></a>
                        <a class="btn btn-warning ml-1" href="{{ route('tests.edit', $test->id) }}"><i class="fas fa-pen"></i></a>
                        <form action="{{ route('tests.destroy', $test->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
