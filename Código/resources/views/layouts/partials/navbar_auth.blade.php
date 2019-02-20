<nav id="navbar_principal" class="navbar navbar-expand-md navbar navbar-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            wPictures
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-md-3">
                <li class="nav-item">
                        <a class="nav-link" href="{{route('picture.create')}}">New</a>
                </li>
                <li class="nav-item mr-md-3">
                        <a class="nav-link" href="{{route('mylist')}}">My list</a>
                </li>
                <form method="POST" action="{{route('search')}}" class="form-inline">
                        @csrf
                        <input class="form-control" name="search" type="search" placeholder="Search">
                </form>
            </ul>
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>