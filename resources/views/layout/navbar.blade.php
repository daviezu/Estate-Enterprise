<nav class="navbar navbar-expand pt-3" style="background-color: #ffffff; z-index: 1000;">
    <div class="container">
        <a class="navbar-brand nav-link active" aria-current="page" href="{{ '' }}">
            <img src="{{ asset('images/EstateVerse Logo.png') }}" alt="Logo" width='200px'>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Properti Dijual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Properti Disewa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Team Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hubungi Kami</a>
            </li>
            <div class="search-container">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit">
                        <img src="{{ asset('images/Search Icon.png') }}" alt="search">
                    </button>
                </form>
            </div>

            @if (session('is_logged_in', false))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.index') }}">Sign In</a>
                </li>
            @endif
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li class="nav-item">
                    <button type="submit" class="nav-link ">Sign Out</button>
                </li>
            </form>
        </ul>
    </div>
</nav>

<style>
    .navbar {
        border-bottom: solid;
        border-width: 1px;
        padding-bottom: 16px;
    }

    .search-container {
        width: 300px;
        height: 40px;
        border: solid;
        border-width: 1px;
        border-color: rgb(168, 168, 168);
        border-radius: 10px;
        margin-left: 20px;
        margin-right: 20px;
    }


    .form-control.me-2 {
        color: rgb(0, 0, 0);
        border: none;
        font-size: 15px;
        margin-left: 10px;
    }

    .form-control:focus {
        outline: none;
        box-shadow: none;
    }

    .nav-link {
        color: #44D7B5
    }

    nav {
        font-family: "Inter", sans-serif;
    }

    .nav-link {
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
    }
</style>
