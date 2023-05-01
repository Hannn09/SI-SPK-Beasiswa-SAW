<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>RaiseMe | SPK Beasiswa</title>
</head>

<body>
    {{-- Section Nav --}}
    <section class="header">
        <nav class="navbar navbar-expand-lg bg-white justify-content-center">
            <div class="container py-2">
                <a class="navbar-brand border-0" href="#">
                    <h4 class="fw-bold">Raise<span>Me</span></h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between align-items-center gap-2" id="navbarNav">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link text-black fw-medium" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-medium" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-medium" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav align-items-center justify-content-center gap-3">
                        <li><a href="{{ route('admin') }}"
                                class="text-decoration-none btn-signin text-black fw-semibold">Sign In</a></li>
                        <li><a href="#" class="text-decoration-none text-white btn-signup fw-semibold rounded-3">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    {{-- Section Hero --}}
    <div class="container">
        <div class="row justify-center align-items-center">
            <div class="col-md-6 content-hero justify-content-center align-items-center">
                <h2 class="fw-bold text-capitalize mb-3 lh-base">Free <span>scholarship</span> for every bright student
                </h2>
                <p class="text-body-tertiary mb-4 fw-medium">Get free scholarships for every level of education that
                    every student who
                    achievement for a bright future you can get it from school</p>
                <button class="text-white fw-semibold border-0 py-3">Get Started</button>
            </div>
            <div class="col-md-6 justify-content-center align-items-center">
                <div class="mx-auto w-100">
                    <img src="{{ asset('images/hero.png') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
