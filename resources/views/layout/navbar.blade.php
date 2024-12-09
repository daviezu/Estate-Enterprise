<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="z-index: 1000;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/EstateVerse Logo.png') }}" class="logo mt-2" alt="Logo" width="200px">
        </a>

        <!-- Button Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none;">
            <span class="navbar-toggler-icon "></span>
        </button>

        <!-- Nav Items -->
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto"> <!-- ms-auto agar menu ke kanan -->
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
                    @if (session('role', true))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agent.property') }}">Properti Saya</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
                    </li>

                    <li class="nav-item ">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn text-light" style="background-color:#44D7B5">Sign Out</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.index') }}">Sign In</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>
    @media (max-width: 992px) {
      


    }

    @media (max-width: 768px) {
        .logo {
            width: 150px;
        }
    }

    @media (max-width: 576px) {
       
    }

    .container {
        width: 100%;
    }

    .navbar {
        width: 100%;
        border-width: 1px;
        padding-bottom: 16px;
        margin-bottom: 0px;
    }

    .nav-link {
        color: #44D7B5;
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
    }

    nav {
        font-family: "Inter", sans-serif;
    }
</style>