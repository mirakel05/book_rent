<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Register</title>
    <link rel="shortcut icon" type="image/png" href="/assets/img/bookfull.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .register-box {
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
        <div class="register-box rounded-4">
            <form action="" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <p class="login-text text-center" style="font-size: 3rem; font-weight: 800;">Register</p>
                <div>
                    <label for="username" class="form-label fw-medium">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Username ...">
                </div>
                <div>
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="text" name="password" id="password" class="form-control"
                        placeholder="Password ...">
                </div>
                <div>
                    <label for="phone" class="form-label fw-medium">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone ...">
                </div>
                <div>
                    <label for="address" class="form-label fw-medium">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required placeholder="Address ..."></textarea>
                </div>
                <button type="submit" class="btn btn-dark form-control mt-4">Register</button>
                <div class="text-center mt-5">
                    have account? <a href="login">Login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
