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


    <title>Log in</title>
</head>
<body class="h-100 container-fluid bg-dark">
    <main class="container">
        <h2 class="fw-bold text-uppercase text-center text-warning mt-5">Inventory System</h2>
        <div class="d-block my-3 border border-dark">

                <div class="row">
                    <div class="col-sm-auto col-lg-2"></div>

                    <div class="col-sm-12 col-lg-8">

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card bg-light border border-warning py-3 px-4">
                                    <h3 class="fw-bold text-center bg-warning rounded py-2 mt-3 shadow">LOGIN FORM</h3>
                                    <form action="{{ route('loginUser') }}" method="post">
                                    @csrf

                                    <div class="mt-3">
                                        <label for="" class="text-uppercase fw-bold">USERNAME<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control border border-primary" placeholder="Enter Username" id="username" name="username"
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mt-2">
                                        <label for="" class="text-uppercase fw-bold">PASSWORD<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control border border-primary" placeholder="Enter Password" id="password" name="password"
                                            value="{{ old('password') }}">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                                            <h5 class="m-0 p-0 text-uppercase">Login</h5>
                                        </button>
                                    </div>

                                    <div class="my-3">
                                        <p class="text-center p-0 m-0 mb-2">Don't have an account yet?</p>
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary w-100 fw-bold">
                                            <h5 class="m-0 p-0 text-uppercase">register</h5>
                                        </a>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>

                    <div class="col-sm-auto col-lg-2"></div>
                </div>

        </div>
    </main>


</body>
</html>
