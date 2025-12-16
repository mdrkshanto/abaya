<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="shortcut icon" href="{{ asset('assets/admin/img/icons/icon-48x48.png') }}" />

    @vite('resources/js/app.js')

    <title>Sign In</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/light.css') }}" rel="stylesheet" />
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome Admin!</h1>
                            @error('credentials')
                                <p class="lead text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form action="{{ route('login.store') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Login ID</label>
                                            <input class="form-control form-control-lg shadow-none" type="text"
                                                name="login_id" placeholder="Enter your login id" />
                                            @error('login_id')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg shadow-none" type="password"
                                                name="password" placeholder="Enter your password" />
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <div class="form-check align-items-center">
                                                <input id="remember-me" type="checkbox"
                                                    class="form-check-input shadow-none" value="remember-me"
                                                    name="remember_me">
                                                <label class="form-check-label text-small" for="remember-me">Remember
                                                    me</label>
                                            </div>
                                            @error('remember_me')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button class='btn btn-lg btn-primary shadow-none' type="submit">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
</body>

</html>
