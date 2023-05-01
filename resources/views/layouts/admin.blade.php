    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
        @yield('css')

        <title>@yield('title')</title>
    </head>

    <body>
        {{-- Section Sidebar --}}
        <div class="position-fixed shadow sidebar">
            <div class="d-flex align-items-center ms-3 logo">
                <img src="{{ asset('images/icon/icon_logo.png') }}" alt="Logo" width="35">
                <h4 class="fw-bold ms-4 align-items-center my-auto">Raise<span>Me</span></h4>
            </div>
            <div class="main-menu mt-5">
                {{-- <p class="mb-3 ms-3 fw-bold menu">Main Menu</p> --}}
                <ul class="sidebar-links list-unstyled d-flex flex-column gap-3">
                    <li>
                        <a href="#" class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-semibold">
                                Dashboard
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="btn-toggle text-decoration-none text-black d-flex align-items-center justify-content-between collapsed"
                            data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            <div class="nav-links d-flex align-items-center">
                                <div class="icon-links py-2 px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                        <path fill="#2A2F4F"
                                            d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5zM6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9l-.6-.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4zm0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5zm5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2zM6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3z" />
                                    </svg>
                                </div>
                                <div class="name-link ms-2 fw-semibold">
                                    Data Kriteria
                                </div>
                            </div>
                        </a>
                        <div class="collapse" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-medium pb-3 small">
                                <li><a href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded">Kriteria</a>
                                </li>
                                <li><a href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pendapatan
                                        Ortu</a>
                                </li>
                                <li><a href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pendidikan
                                        Ortu</a>
                                </li>
                                <li><a href="#"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tanggungan
                                        Ortu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
                                    <path fill="#2A2F4F"
                                        d="M14 23h8v2h-8zm-4 0h2v2h-2zm4-5h8v2h-8zm-4 0h2v2h-2zm4-5h8v2h-8zm-4 0h2v2h-2z" />
                                    <path fill="currentColor"
                                        d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-semibold">
                                Penilaian
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Section Navbar --}}
        <div class="content position-relative">
            <nav class="navbar navbar-expand bg-light d-flex justify-content-between position-fixed">
                <div class="sidebar-btn">
                     <i class="bx bx-menu sidebarBtn fs-1"></i>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center gap-2 text-decoration-none text-black fw-medium"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, User
                        <img src="{{ asset('images/avatar.png') }}" width="40">

                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container position-relative home-content">
                @yield('content')
               
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
        <script>
            let sidebar = document.querySelector('.sidebar');
            let sidebarBtn = document.querySelector('.sidebarBtn');
            sidebarBtn.onclick = function () {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu")
            }
        </script>

    </body>

    </html>
