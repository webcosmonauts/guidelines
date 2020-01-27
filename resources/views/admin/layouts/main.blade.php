@extends('admin.index')

@section('body')
    @include('admin.components.navbar')

    <section class="section">
        @yield('content')
    </section>

    @include('admin.components.footer')
@endsection
