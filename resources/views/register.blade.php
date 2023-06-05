    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
        <title>RaiseMe | Register Page</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 vh-100 left">
                    <div class="content-register">
                        <div class="d-flex align-items-center logo mt-3 logo">
                            <img src="{{ asset('images/icon/icon_logo.png') }}" alt="Logo" width="35">
                            <a href="{{ route('index') }}" class="text-decoration-none">
                                <h4 class="fw-bold ms-3 align-items-center my-auto text-black">Raise<span>Me</span></h4>
                            </a>
                        </div>
                        <div class="text-welcome mt-3">
                            <h1 class="fw-bold fs-2">Get Started</h1>
                            <p class="text-secondary">Create your account now</p>
                        </div>
                        <div class="form-login">
                            <form action="{{ route('register.auth') }}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text"
                                        class="form-control input rounded-3 @error('nim') is-invalid @enderror" id="nim"
                                        name="nim" placeholder="Masukkan NIM Anda" value="{{ old('nim') }}" required>
                                    @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text"
                                        class="form-control input rounded-3 @error('username') is-invalid @enderror"
                                        id="username" name="username" placeholder="Masukkan Username Anda"
                                        value="{{ old('username') }}" required>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email"
                                        class="form-control input rounded-3 @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Masukkan Email Anda"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password"
                                        class="form-control input rounded-3 @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Min. 8 Character" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit"
                                    class="btn btn-signup py-2 px-5 rounded-3 w-100 text-white fw-medium">Sign
                                    Up</button>
                                <div class="link-register mt-3 d-flex justify-content-center ">
                                    <p class="fw-semibold">Already have an account ? <span><a
                                                href="{{ route('login') }}" class="text-decoration-none">Login
                                                here</a></span></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 vh-100 right">

                </div>
            </div>
        </div>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    </body>

    </html>
