<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('EstateVerse.ico') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EstateVerse</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    {{-- Icons--}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


    {{-- Custom Cursor Styles --}}
    <style>
        body {
            margin: 0;
            cursor: none;
        }

        .circle {
            height: 28px;
            width: 28px;
            border-radius: 24px;
            background-color: #19b893;
            position: fixed; 
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 99999999; /* so that it stays on top of all other elements */
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <div class="d-flex flex-column min-vh-100">
        @include('layout.navbar')

        {{-- Content --}}
        @if (request()->routeIs('login.index', 'register.index'))
            <div class="container-fluid px-0 flex-grow-1" style="background-color: #44D7B5;">
                @yield('content')
            </div>
        @else
            <div class="container-fluid px-0 flex-grow-1">
                @yield('content')
            </div>
        @endif

        {{-- Footer --}}
        @include('layout.footer')
    </div>


    {{-- Custom Cursor Elements --}}
    @for ($i = 0; $i < 40; $i++) 
        <div class="circle"></div>
    @endfor
    

    {{-- JavaScript for cursor Effects --}}
<script>
    const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

const colors = [
  "#00ff87",
  "#00ffa2",
  "#00feba",
  "#00fccf",
  "#00fae0",
  "#00f7ee",
  "#3af3f9",
  "#60efff",
  "#90f7ec",
  "#32ccbc",
  "#19b893"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();
</script>

</body>

</html>
