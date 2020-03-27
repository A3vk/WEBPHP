@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Geen rechten tot de pagina.</h5>
                <p class="card-text">
                    U heeft geen rechten voor deze pagina.</br>
                    Login me een correct acount om toegang the krijgen tot deze pagina.
                 </p>
                <a href="/" class="btn btn-primary">Terug naar Dashboard</a>
            </div>
        </div>
    </div>
@endsection