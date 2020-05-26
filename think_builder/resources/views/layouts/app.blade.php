@extends('layouts.base')
@section('dashboard')
    @parent
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endsection