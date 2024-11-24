<div class="spacing"></div>
<div class="footer">
    <div class="mt-4 container footer-box d-flex justify-content-between gap-5">
        <div class="contact-info">
            <div class="spacing">
                <a class="navbar-brand nav-link active" aria-current="page" href="{{ '' }}">
                    <img src="{{ asset('images/EstateVerse Logo.png') }}" width='200px' alt="Logo">
                </a>
            </div>
            
            <p>
                Kebon Jeruk, Jakarta Barat <br>
                Indonesia. <br>
                Email: admin@estaverse.com
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
            <div class="mb-3">
                <div class="spacing">
                    <label for="exampleFormControlInput1" class="contact-label d-flex justify-content-end">ASK FOR HELP</label>
                </div>
                <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1"
                    placeholder="Email">
            </div>
            <div class="mb-3">
                {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
            </div>
            <div class="text-end">
                <button class="send-btn">
                  Send
                </button>
              </div>
              
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
    </div>
</div>

<style>

    .footer{
        border-top: solid;
        border-width: 1px;
    }

    .text-end {
    text-align: right;
    }

    .send-btn{
        color: white;
        background-color: rgb(68, 215, 181);
        text-align: center;
        font-size: 15px;
        font-weight: 600;
        border: none;
        width: 100px;
        height: 40px;
        border-radius: 10px;
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
    
    .property-type-link:hover{
        color: rgb(68, 215, 181);
    }

    .property-title,
    .contact-label {
        font-weight: 700;
    }

    .form-control{
        font-size: 15px;
        border: solid;
        border-width: 1px;
        border-radius: 0px;
    }

    .contact-form {
        font-size: 20px;
    }

    .spacing{
        margin-bottom: 20px;
    }
</style>
