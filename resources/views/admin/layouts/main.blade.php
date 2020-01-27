@extends('admin.index')

@section('body')
    @include('admin.components.navbar')

    <main class="container is-fluid">
        @yield('content')
    </main>
@endsection
