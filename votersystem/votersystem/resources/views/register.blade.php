<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .font-title {
            font-family: 'Nunito', sans-serif;
        }

        label {
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <title>Voter System | Register</title>
</head>
<body class="vh-100" style="background-color: hsl(0, 0%, 96%)">

    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class=" px-4 py-5 px-md-5 text-lg-start" >
            <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="card">
                    <div class="card-body py-2 px-md-5">
                    <form method="post" action="{{ route('addaccount') }}">
                        @csrf

                        <h5 class="font-title my-4 text-center fw-bold ls-tight text-primary">
                            REGISTER ACCOUNT
                        </h5>

                        @if(Session::get('success'))
                            <div class="alert alert-success py-2">
                                <li>
                                    {{ session::get('success') }}
                                </li>
                            </div>
                        @endif

                        @if(Session::get('fail'))
                            <div class="alert alert-danger py-2"> <li>{{ session::get('fail') }}</li></div>
                        @endif

                        <!-- Firstname input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Firstname</label>
                            <input type="text" id="form3Example3" class="form-control" id="firstname" name="firstname"/>
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Middlename input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Middlename</label>
                            <input type="text" id="form3Example3" class="form-control" id="middlename" name="middlename"/>
                            @error('middlename')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Lastname input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Lastname</label>
                            <input type="text" id="form3Example3" class="form-control" id="lastname" name="lastname"/>
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Birthdate input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Birthdate</label>
                            <input type="date" id="form3Example3" class="form-control" id="birthdate" name="birthdate"/>
                            @error('birthdate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Username input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example3">Username</label>
                            <input type="text" id="form3Example3" class="form-control" id="username" name="username"/>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control" id="password" name="password"/>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Confirm Password</label>
                            <input type="password" id="form3Example4" class="form-control" id="confirmpassword" name="confirmpassword"/>
                            @error('confirmpassword')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit button -->
                        <div class="text-end">
                            <button type="submit" class="font-title fw-bold text-uppercase btn btn-primary btn-block my-3">
                                <i class="bi bi-person-plus"></i><span class="ms-2">Register</span>
                            </button>
                        </div>


                        <div class="text-center">
                            <p class="mb-2">Already have an account?</p>
                            <a href={{ route('login') }} class="font-title fw-bold text-uppercase  btn btn-outline-primary btn-floating mx-1 mb-4">
                                <i class="bi bi-box-arrow-in-right"></i></i><span class="ms-2">login</span>
                            </a>
                        </div>
                    </form>
                    </div>
                </div>
                </div>

                <div class="col-lg-6 mb-3 mb-lg-0 text-center">
                <h1 class="font-title my-4 display-3 fw-bold ls-tight text-primary">
                    VOTERS SYSTEM
                </h1>
                <hr class="bg-dark">
                <p class="fs-5" style="color: hsl(217, 10%, 50.8%)">
                    We do not have government by the majority.
                    We have government by the majority who participate.
                    <br/>
                    <br/>
                    <span class="text-uppercase fst-italic fw-bold"> - Thomas Jefferson </span>
                </p>
                </div>
            </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->



</body>
</html>
