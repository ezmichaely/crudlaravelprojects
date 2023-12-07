<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Register</title>
</head>
<body>
    <body class="h-100 container-fluid bg-dark">
    <main class="container">
        <h2 class="fw-bold text-uppercase text-center text-warning mt-5">Inventory System</h2>
        <div class="d-block my-3 border border-dark">
            <div class="row">
                <div class="col-sm-auto col-lg-1"></div>

                <div class="col-sm-12 col-lg-10">
                    <div class="row m-0 p-0">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                                <div class="card bg-white border border-warning shadow-lg overflow-hidden">
                                <div class="py-3 px-4">
                                    <h3 class="fw-bold text-center bg-warning rounded py-2 my-3 shadow">REGISTRATION FORM</h3>

                                    <div class="mt-4">
                                        <form action="{{ route('newUser') }}" method="post">
                                            @csrf
                                            @if(Session::get('success'))
                                                <div class="mx-0 py-2 alert alert-success">{{ session::get('success') }}</div>
                                            @endif

                                            @if(Session::get('fail'))
                                                <div class="mx-0 py-2 alert alert-danger">{{ session::get('fail') }}</div>
                                            @endif

                                            <div class="mt-3">
                                                <label for=""> <span class="fw-bold">FULLNAME<span class="text-danger">*</span></span> <span class="fst-italic">(Firstname, Lastname) </span> </label>
                                                <div class="row gx-1 gy-1 m-0">
                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-column">
                                                            <input type="text" class="form-control border border-primary" placeholder="First name" id="firstname" name="firstname"
                                                            value="{{ old('firstname') }}">
                                                            @error('firstname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-column">
                                                        <input type="text" class="form-control border border-primary" placeholder="Last name" id="lastname" name="lastname"
                                                            value="{{ old('lastname') }}">
                                                            @error('lastname')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="mt-2">
                                                <label for="" class="text-uppercase fw-bold">USERNAME<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control border border-primary" placeholder="Enter Username" id="username" name="username"
                                                    value="{{ old('username') }}">
                                                    @error('username')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>


                                            <div class="mt-1">
                                                <div class="row gx-1 gy-2 m-0">
                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-column">
                                                            <label for="" class="text-uppercase fw-bold">PASSWORD<span class="text-danger">*</span></label>
                                                            <input type="password" class="form-control border border-primary" placeholder="Enter Password" id="password" name="password"
                                                                value="{{ old('password') }}">
                                                                @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="d-flex flex-column">
                                                            <label for="" class="text-uppercase fw-bold">CONFIRM PASSWORD<span class="text-danger">*</span></label>
                                                            <input type="password" class="form-control border border-primary" placeholder="Confirm Password" id="password" name="confirmpassword">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary w-100 fw-bold">
                                                    <h5 class="m-0 p-0 text-uppercase">REGISTER</h5>
                                                </button>
                                            </div>

                                            <div class="my-3">
                                                <p class="text-center p-0 m-0 mb-2">Already have an account?</p>
                                                <a href="/login" class="btn btn-outline-primary w-100 fw-bold">
                                                    <h5 class="m-0 p-0 text-uppercase">LOGIN</h5>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="col-sm-auto col-lg-1"></div>
            </div>
        </div>




    </main>


</body>



</body>
</html>
