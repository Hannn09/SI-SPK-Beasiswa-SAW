    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
        @yield('css')

        <title>@yield('title')</title>
    </head>

    <body>
        {{-- Section Sidebar --}}
        <div class="position-fixed shadow sidebar overflow-auto">
            <div class="d-flex align-items-center ms-3 logo">
                <img src="{{ asset('images/icon/icon_logo.png') }}" alt="Logo" width="35">
                <h4 class="fw-bold ms-4 align-items-center my-auto">Raise<span>Me</span></h4>
            </div>
            <div class="main-menu mt-5">
                {{-- <p class="mb-3 ms-3 fw-bold menu">Main Menu</p> --}}
                <ul class="sidebar-links list-unstyled d-flex flex-column gap-3">
                    <li>
                        <a href="{{ route('admin') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Dashboard
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('kriteria') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M16 21q-.825 0-1.413-.588T14 19v-4q0-.825.588-1.413T16 13h4q.825 0 1.413.588T22 15v4q0 .825-.588 1.413T20 21h-4Zm0-2h4v-4h-4v4ZM2 18v-2h9v2H2Zm14-7q-.825 0-1.413-.588T14 9V5q0-.825.588-1.413T16 3h4q.825 0 1.413.588T22 5v4q0 .825-.588 1.413T20 11h-4Zm0-2h4V5h-4v4ZM2 8V6h9v2H2Zm16 9Zm0-10Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Data Kriteria
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pendapatan') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M10.5 8a3 3 0 1 0 0 6a3 3 0 0 0 0-6ZM9 11a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0ZM2 7.25A2.25 2.25 0 0 1 4.25 5h12.5A2.25 2.25 0 0 1 19 7.25v7.5A2.25 2.25 0 0 1 16.75 17H4.25A2.25 2.25 0 0 1 2 14.75v-7.5Zm2.25-.75a.75.75 0 0 0-.75.75V8h.75A.75.75 0 0 0 5 7.25V6.5h-.75Zm-.75 6h.75a2.25 2.25 0 0 1 2.25 2.25v.75h8v-.75a2.25 2.25 0 0 1 2.25-2.25h.75v-3h-.75a2.25 2.25 0 0 1-2.25-2.25V6.5h-8v.75A2.25 2.25 0 0 1 4.25 9.5H3.5v3Zm14-4.5v-.75a.75.75 0 0 0-.75-.75H16v.75c0 .414.336.75.75.75h.75Zm0 6h-.75a.75.75 0 0 0-.75.75v.75h.75a.75.75 0 0 0 .75-.75V14Zm-14 .75c0 .414.336.75.75.75H5v-.75a.75.75 0 0 0-.75-.75H3.5v.75Zm.901 3.75A2.999 2.999 0 0 0 7 20h10.25A4.75 4.75 0 0 0 22 15.25V10a3 3 0 0 0-1.5-2.599v7.849a3.25 3.25 0 0 1-3.25 3.25H4.401Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Pendapatan Ortu
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3m6.82 6L12 12.72L5.18 9L12 5.28L18.82 9M17 16l-5 2.72L7 16v-3.73L12 15l5-2.73V16Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Pendidikan Ortu
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tanggungan') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M6 19h12L16.575 9h-9.15L6 19Zm6-12q.425 0 .713-.288T13 6q0-.425-.288-.713T12 5q-.425 0-.713.288T11 6q0 .425.288.713T12 7ZM3.7 21l2-14h3.475q-.075-.25-.125-.488T9 6q0-1.25.875-2.125T12 3q1.25 0 2.125.875T15 6q0 .275-.05.513T14.825 7H18.3l2 14H3.7ZM6 19h12H6Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Tanggungan Ortu
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('data.alternatif') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M17 3h-3v2h3v16H7V5h3V3H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-5 4a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m4 8H8v-1c0-1.33 2.67-2 4-2s4 .67 4 2v1m0 3H8v-1h8v1m-4 2H8v-1h4v1m1-15h-2V1h2v4Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Data Alternatif
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('data.file') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h5.175q.4 0 .763.15t.637.425L12 6h8q.825 0 1.413.588T22 8H6q-.825 0-1.413.588T4 10v8l1.975-6.575q.2-.65.738-1.038T7.9 10h12.9q1.025 0 1.613.813t.312 1.762l-1.8 6q-.2.65-.738 1.038T19 20H4Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Data Berkas
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('data.ortu') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24">
                                    <path fill="#2A2F4F"
                                        d="M7 11a4.5 4.5 0 1 1 0-9a4.5 4.5 0 0 1 0 9Zm10.5 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8Zm0 1a4.5 4.5 0 0 1 4.5 4.5v.5h-9v-.5a4.5 4.5 0 0 1 4.5-4.5ZM7 12a5 5 0 0 1 5 5v4H2v-4a5 5 0 0 1 5-5Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Data Orangtua
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('penilaian') }}"
                            class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
                                    <path fill="#2A2F4F"
                                        d="M14 23h8v2h-8zm-4 0h2v2h-2zm4-5h8v2h-8zm-4 0h2v2h-2zm4-5h8v2h-8zm-4 0h2v2h-2z" />
                                    <path fill="currentColor"
                                        d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Penilaian
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rank') }}" class="text-decoration-none text-black d-flex align-items-center">
                            <div class="icon-links py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-trophy" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z" />
                                </svg>
                            </div>
                            <div class="name-link ms-2 fw-bold">
                                Rank
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
                        Halo, Admin
                        <img src="{{ asset('images/avatar.png') }}" width="40">

                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit">Sign out</button>
                            </form>
                        </li>
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
        @yield('js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
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
