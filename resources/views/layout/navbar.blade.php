<nav class="navbar navbar-expand pt-3 fixed-top" style="background-color: #ffffff; z-index: 1000;">
    <div class="container">
        <a class="navbar-brand nav-link active" aria-current="page" href="{{ route('home') }}">
            <img src="{{ asset('images/EstateVerse Logo.png') }}" class="logo" alt="Logo" width='200px'>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('property.list') }}">Properti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about.index') }}">Team Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agent.list') }}">Agent Seller</a>
            </li>
            @if (session('is_logged_in', false))
                {{-- agent navbar start --}}
                @if (session('role', true))
                    <li class="nav-item">
                        <a href={{ route('agent.property') }} class="nav-link" href="#">Properti Saya</a>
                    </li>
                @endif
                {{-- agent navbar end --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li class="nav-item">
                        <button type="submit" class="nav-link ">Sign Out</button>
                    </li>
                </form>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.index') }}">Sign In</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<style>
    @media (max-width: 992px) {

        .nav-item a,
        .nav-item button {
            font-size: 10px;
        }

        .search-container {
            width: 250px !important;
        }

        .logo {
            width: 100px;
        }

    }

    @media (max-width: 768px) {
        .logo {
            width: 75px;
        }

    }

    @media (max-width: 576px) {
        .logo {
            width: 70px;
        }
    }

    @media (max-width: 480px) {}

    .container {
        width: 100%;
    }

    .navbar {
        width: 100%;
    
        border-width: 1px;
        padding-bottom: 16px;
        margin-bottom: 0px;
    }

    .search-container {
        overflow: hidden;
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
