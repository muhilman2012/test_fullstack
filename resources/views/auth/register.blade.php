<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="{{ url('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/assets/css/authAdmin.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="box-auth">
            <div class="box-head">
                <h3>REGISTER</h3>
                <p class="mb-0">Welcome Register Pages</p>
            </div>
            <div class="box-body">
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <div class="mb-2">
                        <label for="Name" class="form-label">Name</label>
                        <input name="name" type="name" class="form-control @error('name') is-invalid @enderror" id="Name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="Username" class="form-label">Username</label>
                        <input name="username" type="username" class="form-control @error('username') is-invalid @enderror" id="Username">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="Password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary form-control">REGISTER</button>
                </form>
            </div>
            <div class="box-footer">
                <div class="d-block text-center text-secondary">
                    <p class="mb-0">Sudah Punya Akun?</p>
                    <a href="{{ route('login') }}" class="link-orange text-decoration-none text-uppercase">LOGIN</a>
                </div>
            </div>
        </div> 

        <div class="slider-background" id="sliders-background"></div>
        <script src="{{ url('/dist/assets/js/jquery.js') }}"></script>
        <script src="{{ url('/dist/assets/js/popper.js') }}"></script>
        <script src="{{ url('/dist/app/js/app.js') }}"></script>
        <script src="{{ url('/dist/assets/js/alert.js') }}"></script>
        <script src="{{ url('/dist/assets/js/admin/panel.js') }}"></script>
        <script src="{{ url('/dist/assets/js/admin/chart.js') }}"></script>
    </body>
</html>
