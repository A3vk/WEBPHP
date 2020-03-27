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
        <a class="btn btn-success mb-3 add-item float-right" href="{{ route('modules.create') }}"><i class="fas fa-plus"></i>Toevoegen</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-fixed">
            <thead class="bg-success">
            <tr>
                <th scope="col">id</th>
                <th scope="col">naam</th>
                <th scope="col">periode</th>
                <th scope="col">blok</th>
                <th scope="col">behaalde studiepunten</th>
                <th scope="col">te behalen studiepunten</th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($modules as $module)
                <tr>
                    <th scope="row">{{ $module->id }}</th>
                    <td>{{ $module->name }}</td>
                    <td>{{ $module->period }}</td>
                    <td>{{ $module->block }}</td>
                    <td>{{ $module->obtained_credits }}</td>
                    <td>{{ $module->total_credits }}</td>
                    <td class="d-flex">
                        <a class="btn btn-success" href="{{ route('modules.show', $module->id) }}"><i class="far fa-eye"></i></a>
                        <a class="btn btn-warning ml-1" href="{{ route('modules.edit', $module->id) }}"><i class="fas fa-pen"></i></a>
                        <form action="{{ route('modules.destroy', $module->id) }}" method="POST">
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
