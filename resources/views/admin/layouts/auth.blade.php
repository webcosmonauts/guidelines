@extends('admin.index')

@section('body')
    <section class="hero is-fullheight is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
@endsection
