<div class="container footer-box d-flex">
    <div class="contact-info">
        <a class="navbar-brand nav-link active aria-current="page" href="{{ '' }}">
            <img src="{{ asset('images/EstateVerse Logo.png') }}" alt="Logo">
        </a>
        <p>
            Kebon Jeruk, Jakarta Barat <br>
            Indonesia. <br>
            Email: admin@estaverse.com
        </p>
    </div>
    <div class="property-type d-flex flex-column">
        <h5 class="property-title">Property</h5>
        <a class="property-type-link" href="#">House</a>
        <a class="property-type-link" href="#">Apartment</a>
        <a class="property-type-link" href="#">Villa</a>
        <a class="property-type-link" href="#">Hotel</a>
    </div>
    <div class="contact-form">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="contact-label">ASK FOR HELP</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="mb-3">
            {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
        </div>
    </div>
</div>

<style>
    .footer-box {
        font-family: "Montserrat", sans-serif;
    }

    .property-type-link,
    .contact-info {
        font-size: 20px;
        font-weight: 400;
        color: #000000;
    }

    .property-title,
    .contact-label {
        font-weight: 700;
    }

    .contact-form {
        font-size: 20px
    }
</style>
