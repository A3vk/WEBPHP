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
        <a class="btn btn-success mb-3 add-item float-right" href="{{ route('teachers.create') }}"><i class="fas fa-plus"></i>Toevoegen</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-fixed">
            <thead class="bg-success">
            <tr>
                <th scope="col">id</th>
                <th scope="col">voornaam</th>
                <th scope="col">achternaam</th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <th scope="row">{{ $teacher->id }}</th>
                        <td>{{ $teacher->first_name }}</td>
                        <td>{{ $teacher->last_name }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning" href="{{ route('teachers.edit', $teacher->id) }}"><i class="fas fa-pen"></i></a>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
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
