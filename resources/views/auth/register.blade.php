<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="author" content="Bendi Tandayu Saputra">

    <title>Login - {{ config('app.name') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 pt-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>
                                    <form class="user" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input 
                                                type="text" 
                                                class="form-control form-control-user"
                                                id="nama" 
                                                placeholder="Masukan Email" 
                                                name="nama"
                                                value="{{ old('nama') }}"
                                            >
                                            @error('nama')
                                                <small class="text-danger pl-3" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input 
                                                type="email" 
                                                class="form-control form-control-user"
                                                id="email" 
                                                placeholder="Masukan Email" 
                                                name="email"
                                                value="{{ old('email') }}"
                                            >
                                            @error('email')
                                                <small class="text-danger pl-3" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input 
                                                type="password" 
                                                class="form-control form-control-user"
                                                id="password" 
                                                placeholder="Masukan Password"
                                                name="password"
                                            >
                                            @error('password')
                                                <small class="text-danger pl-3" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input 
                                                type="password" 
                                                class="form-control form-control-user"
                                                id="password_confirmation" 
                                                placeholder="Masukan Password"
                                                name="password_confirmation"
                                            >
                                            @error('password_confirmation')
                                                <small class="text-danger pl-3" role="alert">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('template') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template') }}/js/sb-admin-2.min.js"></script>

</body>

</html>