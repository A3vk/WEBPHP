@extends('layouts.admin')

@section('crud')
    <a class="btn btn-success add-item" href="modules/create"><i class="fas fa-plus"></i>Toevoegen</a>

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
            <tr>
                <th scope="row">1</th>
                <td>WEBJS</td>
                <td>3</td>
                <td>7</td>
                <td>4</td>
                <td>0</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="modules/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="modules/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>WEBJS</td>
                <td>3</td>
                <td>7</td>
                <td>4</td>
                <td>0</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="modules/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="modules/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>WEBJS</td>
                <td>3</td>
                <td>7</td>
                <td>4</td>
                <td>0</td>
                <td class="d-flex">
                    <a class="btn btn-warning" href="modules/1/edit"><i class="fas fa-pen"></i></a>
                    <form action="modules/1" method="DELETE">
                        <button class="btn btn-danger ml-1" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
