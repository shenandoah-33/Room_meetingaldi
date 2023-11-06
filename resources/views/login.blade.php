<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meeting Room | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<style>
    .main {
        height: 100vh;
    }

    .login-box {
        width: 100vh;
        padding: 10px;
        border: solid 1px;
    }

    form div {
        margin-bottom: 15px;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
        <div class="login-box p-5">
            <form action="" method="post">
                @csrf
                <div>
                    <label for="username" class="form-label text-dark">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label text-dark">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center">
                    Don't Have Account? <a href="register">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </section>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">

                <!-------------      image     ------------->

                <img src="images/logo-kpu.png" alt="">
                <div class="text">
                    <p>Join the community of developers <i>- ludiflex</i></p>
                </div>

            </div>

            <div class="col-md-6 right">

                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="input-box">

                   <header>Login</header>
                   <div class="input-field">
                        <input type="text" class="input" id="username" required="" autocomplete="off">
                        <label for="username">Username</label>
                    </div>
                   <div class="input-field">
                        <input type="password" class="input" id="pass" required="">
                        <label for="pass">Password</label>
                    </div>
                   <div class="input-field">

                        <input type="submit" class="submit" value="Sign Up">
                   </div>
                   <div class="signin">
                    <span> Don't Have Account? <a href="/register">Sign Up</a></span>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> --}}
