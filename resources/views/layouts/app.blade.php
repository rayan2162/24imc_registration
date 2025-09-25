<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '24IMC') }}</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <style>
        * {
            /* font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; */
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Countdown */
        .countdown-box {
      background: white;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      text-align: center;
    }
    .countdown-number {
      font-size: 2.5rem;
      font-weight: bold;
      color: #0072BB;
    }
    .countdown-label {
      text-transform: uppercase;
      font-size: 0.9rem;
      color: #6c757d;
    }

/* Infinite Banner for scope */
.wrapper {
font-size: larger;;
font-weight: bold;
  max-width: 100%;
  overflow: hidden;
  background-color: white;
}

.marquee {
  white-space: nowrap;
  overflow: hidden;
  display: inline-block;
  animation: marquee 70s linear infinite;
}

.marquee p {
  display: inline-block;
}

@keyframes marquee {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(-50%, 0, 0);
  }
}

/* Carousel */
  .carousel-inner img {
    height: 90vh;
    object-fit: cover;
  }

  .carousel-item {
    position: relative;
  }

  .carousel-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay */
    z-index: 1;
  }

  .carousel-caption {
    z-index: 2;
    position: absolute;
    bottom: 25%;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    max-width: 1000px;
    padding: 1rem;
  }

  @media (max-width: 768px) {
    .carousel-caption h1 {
      font-size: 1.5rem;
    }

    .carousel-caption h4,
    .carousel-caption p,
    .carousel-caption a {
      font-size: 1rem;
    }

    .carousel-caption img {
      height: 50px !important;
    }

    .carousel-caption {
      bottom: 25%;
    }
  }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app" class="flex-grow-1 d-flex flex-column">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg py-2" style="background-color: white; position: sticky; top: 0; z-index: 1000;">
            <div class="container-fluid">

                <!-- Logo and Title -->
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="ms-2 d-flex flex-column">
                        <span class="fw-bold fs-5" style="color:#ED1B24">24<sup>th</sup> International</span>
                        <span class="fw-bold fs-5" style="color:#0072BB">Mathematics Conference</span>
                    </div>
                </a>

                <!-- Toggler Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    
                    <!-- Center Nav Items -->
<div class="mx-auto">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link fw-bold text-primary" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-primary" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-primary" href="{{ url('/speakers') }}">Speakers</a>
        </li>

        <!-- Committee Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-primary" href="#" id="committeeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Committee
            </a>
            <ul class="dropdown-menu" aria-labelledby="committeeDropdown">
                <li><a class="dropdown-item" style="color: #ED1B24" href="{{ url('/committee/scientific') }}">Scientific Committee</a></li>
                <li><a class="dropdown-item" style="color: #ED1B24" href="{{ url('/committee/organizing') }}">Organizing Committee</a></li>
                <li><a class="dropdown-item" style="color: #ED1B24" href="{{ url('/committee/national-advisory') }}">National Advisory Committee</a></li>
                <li><a class="dropdown-item" style="color: #ED1B24" href="{{ url('/committee/advisory') }}">International Advisory Committee</a></li>
            </ul>
        </li>

        <!-- Download Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold text-primary" href="#" id="downloadDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Download
            </a>
            <ul class="dropdown-menu" aria-labelledby="downloadDropdown">
    <li>
        <a class="dropdown-item" style="color: #ED1B24"
           href="{{ asset('downloads/24imc-poster.pdf') }}" download>
           24IMC Poster
        </a>
    </li>
    <li>
        <a class="dropdown-item" style="color: #ED1B24"
           href="{{ asset('downloads/24imc-flyer.pdf') }}" download>
           24IMC Flyer
        </a>
    </li>
    <li>
        <a class="dropdown-item" style="color: #ED1B24"
           href="{{ asset('downloads/paper-submission-format.docx') }}" download>
           Abstract Submission Format
        </a>
    </li>
    <li>
        <a class="dropdown-item" style="color: #ED1B24"
           href="{{ asset('downloads/Word+Template.zip') }}" download>
           Format for full paper
        </a>
    </li>
</ul>

        </li>

        <li class="nav-item">
            <a class="nav-link fw-bold text-primary" href="{{ url('/registration') }}">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-primary" href="{{ url('/paper-submission') }}">Paper Submission</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-primary" href="{{ url('/contact') }}">Contact</a>
        </li>
    </ul>
</div>


                    <!-- Right Side -->
                    <ul class="navbar-nav ms-auto ">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #ED1B24" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link fw-bold" style="color: #ED1B24" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow-1">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class=" pt-4 pb-2" style="background-color: #0072BB; color: white; padding: 10px;">
        <div class="container">
            <div class="row mb-2">
                <div class="col text-start">
                    <h5 class="fw-bold mb-0">
                        24<sup>th</sup> International Mathematics Conference
                    </h5>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col text-start">
                    <p class="mb-0 small">
                        <a class="text-white" href="https://cu.ac.bd/mathematics/">Department of Mathematics, University of Chittagong</a><br />
                        Chattogram-4331, Bangladesh<br />
                        <a class="text-white" href="https://www.bdmathsociety.org/">Bangladesh Mathematical Society</a><br/><br>
                    </p>
                    <a class="text-decoration-none text-white mb-0 small" href="https://www.linkedin.com/in/rayanul-kader-chowdhury/">
                        Developed by: Rayanul Kader Chowdhury Abid
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script>
        const targetDate = new Date("December 18, 2025 00:00:00").getTime();

    function updateCountdown() {
      const now = new Date().getTime();
      const diff = targetDate - now;

      if (diff <= 0) {
        document.getElementById("countdown").innerHTML = "<h4>Event Started!</h4>";
        return;
      }

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((diff % (1000 * 60)) / 1000);

      document.getElementById("days").innerText = days;
      document.getElementById("hours").innerText = hours;
      document.getElementById("minutes").innerText = minutes;
      document.getElementById("seconds").innerText = seconds;
    }

    updateCountdown(); // Initial call
    setInterval(updateCountdown, 1000); // Update every second
    </script>
</body>
</html>
