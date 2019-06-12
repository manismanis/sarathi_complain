<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Admin Login</title>
</head>
<body>
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-size: medium"><strong>Sarathi: Complain Management System:
                            Login</strong></div>
                    <div class="card-body">
                        <form method="post" action="{{route('admin-login')}}">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><strong>E-Mail</strong></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required
                                           autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right"><strong>Password</strong></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                     <a class="btn btn-link" href="{{route('admin.password.request')}}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


</body>
</html>