@extends('layouts.admin')

@section('crud')
    <a class="btn btn-success add-item" href="tests/create"><i class="fas fa-plus"></i>Toevoegen</a>
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
            <tr>
                <th scope="row">1</th>
                <td>WEBJS</td>
                <td>Invy</td>
                <td>assessment</td>
                <td>26/03/2020</td>
                <td>6,9</td>
                <td>Ja</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="tests/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="tests/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>WEBJS</td>
                <td>Invy</td>
                <td>assessment</td>
                <td>26/03/2020</td>
                <td>6,9</td>
                <td>Ja</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="tests/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="tests/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>WEBJS</td>
                <td>Invy</td>
                <td>assessment</td>
                <td>26/03/2020</td>
                <td>6,9</td>
                <td>Ja</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="tests/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="tests/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
