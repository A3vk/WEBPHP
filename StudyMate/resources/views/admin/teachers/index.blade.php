@extends('layouts.admin')

@section('crud')
    <a class="btn btn-success add-item" href="teachers/create"><i class="fas fa-plus"></i>Toevoegen</a>
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
            <tr>
                <th scope="row">1</th>
                <td>Stijn</td>
                <td>Smulders</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="teachers/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="teachers/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Vincent</td>
                <td>Kreuzen</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="teachers/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="teachers/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Nikita</td>
                <td>Welling</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="teachers/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="teachers/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
