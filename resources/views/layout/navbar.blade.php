<nav class="navbar navbar-expand pt-3 style="background-color: #ffffff">
    <div class="container">
        <a class="navbar-brand nav-link active" aria-current="page" href="{{ '' }}">
            <img src="{{ asset('images/EstateVerse Logo.png') }}" alt="Logo">
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
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit">
                    <img src="{{ asset('images/Search Icon.png') }}" alt="search">
                </button>
            </form>

            <li class="nav-item">
                <a class="nav-link" href="#">Sign In</a>
            </li>
        </ul>
    </div>
</nav>

<style>
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
