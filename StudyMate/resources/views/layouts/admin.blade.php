@extends('layouts.app')

@section('content')
    <!-- Side navigation -->
    <div class="sidenav">
        <a class="{{ (request()->is('admin/teachers*')) ? 'active' : '' }}" href="{{ route('teachers.index') }}">Docenten</a>
        <a class="{{ (request()->is('admin/modules*')) ? 'active' : '' }}" href="{{ route('modules.index') }}">Vakken</a>
        <a class="{{ (request()->is('admin/tests*')) ? 'active' : '' }}" href="{{ route('tests.index') }}">Toetsen</a>
    </div>

    <!-- Page content -->
    <div class="main">
        @yield('crud')
    </div>
@endsection
