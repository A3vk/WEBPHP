@extends('layouts.app')

@section('content')
    <!-- Side navigation -->
    <div class="sidenav">
        <a class="{{ (request()->is('admin/teachers*')) ? 'active' : '' }}" href="/admin/teachers">Docenten</a>
        <a class="{{ (request()->is('admin/modules*')) ? 'active' : '' }}" href="/admin/modules">Vakken</a>
        <a class="{{ (request()->is('admin/tests*')) ? 'active' : '' }}" href="/admin/tests">Toetsen</a>
    </div>

    <!-- Page content -->
    <div class="main">
        @yield('crud')
    </div>
@endsection
