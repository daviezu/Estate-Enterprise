<div class="footer spacing"></div>
<div class="mt-4 container footer-box d-flex justify-content-between gap-5" style="z-index: 1000">
    <div class="contact-info">
        <div class="spacing">
            <a class="navbar-brand nav-link active" aria-current="page" href="{{ '' }}">
                <img src="{{ asset('images/EstateVerse Logo.png') }}" width='200px' alt="Logo">
            </a>
        </div>

        <p>
            Kebon Jeruk, Jakarta Barat <br>
            Indonesia. <br> <br>
            Email: admin@estateverse.com
        </p>
    </div>
    <div class="property-type d-flex flex-column flex-grow-1 ms-5">
        <h5 class="property-title">Property</h5>
        <a class="property-type-link" href="#">House</a>
        <a class="property-type-link" href="#">Apartment</a>
        <a class="property-type-link" href="#">Villa</a>
        <a class="property-type-link" href="#">Hotel</a>
    </div>
    <div class="contact-form d-flex flex-column
    
     flex-grow-1">

            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
    </div>
</div>

<style>
     @media (max-width: 992px) {

    }

    @media (max-width: 768px) {

    }

    @media (max-width: 576px) {

    }

    @media (max-width: 480px) {

    }

    .footer {
        border-top: solid;
        border-width: 1px;
    }

    .text-end {
        text-align: right;
    }

    .send-btn {
        color: white;
        background-color: rgb(68, 215, 181);
        text-align: center;
        font-size: 15px;
        font-weight: 600;
        border: none;
        width: 100px;
        height: 40px;
        border-radius: 10px;
        transition-duration: 0.4s;
    }

    .send-btn:hover {
        background-color: #28bc99;
    }

    .footer-box {
        font-family: "Montserrat", sans-serif;
    }

    .property-type-link,
    .contact-info {
        font-size: 15px;
        font-weight: 400;
        color: #000000;
        text-decoration: none;
    }

    .property-type-link {
        transition-duration: 0.4s;
        margin-top: 10px;
    }

    .property-type-link:hover {
        color: rgb(68, 215, 181);
    }

    .property-title,
    .contact-label {
        font-weight: 700;
    }

    .form-control {
        font-size: 15px;
        border: solid;
        border-width: 1px;
        border-radius: 0px;
    }

    .contact-form {
        font-size: 20px;
    }

    .spacing {
        margin-bottom: 30px;
    }
</style>
