@extends('layouts.template')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa; /* Light Gray Background */
        }

        .box-area {
            width: 930px;
        }

        .right-box {
            padding: 40px 30px 40px 40px;
        }

        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        /* Batik and Tenun Store Colors */
        .bg-primary {
            background-color: #ffc107; /* Yellow */
            color: #343a40; /* Dark Gray Text */
        }

        .text-secondary {
            color: #343a40; /* Dark Gray Text */
        }

        /*------------ For small screens------------*/
        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }

            .left-box {
                height: 100px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #7fd7eb; color: #ffc107;">
                <div class="featured-image mb-3">
                 </div>
                <p class="text-black text-center fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Dagadu Djokdja</p>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Login</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="w-100">
                        @csrf
                        <div class="mb-3">
                            @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-warning">{{ $error }}</div>
                            @endforeach
                            @endif

                            @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <p>{{ $message }}</p>
                            </div>
                            @endif

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" required class="form-control">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100 fs-6">Login</button>
                        </div>
                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
