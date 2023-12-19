<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Login</title>
    <link rel="shortcut icon" type="image/png" href="/assets/img/bookfull.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .login-box {
        width: 400px;
        border: solid 2px;
        padding: 25px;
    }

    form div {
        margin-bottom: 15px;
    }
</style>

<body>

    <div class="main d-flex justify-content-center align-items-center">
        <div class="login-box rounded-4">
            <a href="/login" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="/assets/img/book-rent.png" width="180" alt="">
            </a>
            {{-- <p class="login-text text-center mt-3" style="font-size: 3rem; font-weight: 800;">Login</p> --}}
            <form action="" method="post">
                @csrf
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
                <div>
                    <label for="username" class="form-label fw-medium">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required
                        placeholder="Username ...">
                </div>
                <div>
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="text" name="password" id="password" class="form-control" required
                        placeholder="Password ...">
                </div>
                <button type="submit" class="btn btn-dark form-control mt-4">Login</button>
                <div class='text-center mt-4'>
                    <p>Or login with</p>
                    {{-- icon social media --}}
                    <a href="{{ route('auth.google') }}">
                        <img src="/assets/img/google.png" width="30" alt="">
                    </a>
                </div>
                <div class="text-center mt-3">
                    don't have account? <a href="register">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ session('success') }}'
            })
        </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
