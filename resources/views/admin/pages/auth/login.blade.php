@extends('admin.layouts.auth')

@section('content')
    <div class="card column is-4">
        <div class="card-content">
            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email" required>
                        <span class="icon is-left"><i class="fas fa-envelope"></i></span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="password" placeholder="Password" required>
                        <span class="icon is-left"><i class="fas fa-lock"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label class="checkbox">
                        <input name="remember" type="checkbox">
                        Remember me
                    </label>
                </div>
                <button class="button is-primary is-outlined is-fullwidth">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span>Login</span>
                </button>
            </form>
        </div>
    </div>
@endsection
