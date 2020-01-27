<nav class="navbar is-primary">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('admin.dashboard') }}">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28" alt="log">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-arrowless" href="{{ route('admin.routes.index') }}">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span>Routes</span>
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('admin.routes.create') }}">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>
                        <span>Add route</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="button is-primary is-inverted is-outlined is-fullwidth">
                            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
