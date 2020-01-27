@extends('admin.layouts.auth')

@section('content')
    <div class="card column is-4">
        <div class="card-content">
            <form action="{{ route('admin.login') }}" method="POST" novalidate>
                @csrf
                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-radiusless" type="email" name="email" placeholder="Email" required>
                        <span class="icon is-left"><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-radiusless" type="password" name="password" placeholder="Password" required>
                        <span class="icon is-left"><i class="fas fa-lock"></i></span>
                    </div>
                </div>
                <div class="field">
                    <input class="is-checkradio is-radiusless" type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="button is-primary is-outlined is-fullwidth is-radiusless">
                    <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
                    <span>Sign in</span>
                </button>
            </form>
        </div>
    </div>
@endsection
