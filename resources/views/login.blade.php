    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
        <title>RaiseMe | Login Page</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12 vh-100 left">
                    <div class="content-login">
                        <div class="d-flex align-items-center logo mt-4 logo">
                            <img src="{{ asset('images/icon/icon_logo.png') }}" alt="Logo" width="35">
                            <a href="{{ route('index') }}" class="text-decoration-none">
                                <h4 class="fw-bold ms-3 align-items-center my-auto text-black">Raise<span>Me</span></h4>
                            </a>
                        </div>
                        <div class="text-welcome mt-5">
                            <h1 class="fw-bold fs-2">Welcome Back !</h1>
                            <p class="text-secondary">Enter to your details to get sign in to yout account</p>
                        </div>
                        <div class="form-login">
                            <form action="{{ route('login.auth') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control input rounded-3 @error('username') is-invalid @enderror" id="username" name="username"
                                        placeholder="Masukkan Username Anda" required value="{{ old('username') }}">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                        @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control input rounded-3 @error('password') is-invalid @enderror" id="password" name="password"
                                        placeholder="Masukkan Password Anda">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <button type="submit"
                                    class="btn btn-signup py-2 px-5 rounded-3 w-100 text-white fw-medium">Sign
                                    In</button>
                                <div class="link-register mt-3 d-flex justify-content-center ">
                                    <p class="fw-semibold">Don't have an account ?  <span><a href="{{ route('register') }}" class="text-decoration-none">Register here</a></span> </p>       
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
        <script>
            @if(session('status'))
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('status') }}',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif

            @if(session('loginError'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('loginError') }}',
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif
        </script>
    </body>

    </html>
