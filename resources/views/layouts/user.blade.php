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
                    <a href="{{ route('alternative') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24">
                                <path fill="#2A2F4F"
                                    d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Alternatif
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('file') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24">
                                <path fill="#2A2F4F"
                                    d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h5.175q.4 0 .763.15t.637.425L12 6h8q.825 0 1.413.588T22 8H6q-.825 0-1.413.588T4 10v8l1.975-6.575q.2-.65.738-1.038T7.9 10h12.9q1.025 0 1.613.813t.312 1.762l-1.8 6q-.2.65-.738 1.038T19 20H4Z" />
                                </svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Berkas
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('parent') }}" class="text-decoration-none text-black d-flex align-items-center">
                        <div class="icon-links py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24"><path fill="#2A2F4F" d="M7 11a4.5 4.5 0 1 1 0-9a4.5 4.5 0 0 1 0 9Zm10.5 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8Zm0 1a4.5 4.5 0 0 1 4.5 4.5v.5h-9v-.5a4.5 4.5 0 0 1 4.5-4.5ZM7 12a5 5 0 0 1 5 5v4H2v-4a5 5 0 0 1 5-5Z"/></svg>
                        </div>
                        <div class="name-link ms-2 fw-semibold">
                            Data Ortu
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
