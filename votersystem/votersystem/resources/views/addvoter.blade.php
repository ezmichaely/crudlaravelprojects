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
    <title>Voter System | Add Voter</title>
</head>
<body class="vh-100" style="background-color: hsl(0, 0%, 96%)">
    <nav class="navbar navbar-light bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand text-white font-title fw-bold fs-3">VOTER SYSTEM</a>
        <a href="{{ route('logout') }}" class="btn btn-warning font-title fw-bold"><i class="bi bi-box-arrow-left"></i><span class="ms-2">LOGOUT</span></a>
    </div>
    </nav>

    <div class="container mt-5">
        <div class="card px-4 px-md-5 py-3">
            <form method="post" action={{ route('newvoter') }}>
                @csrf
                <h3 class="font-title fw-bold text-primary text-center mb-3">ADD VOTER</h3>
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

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">First name</label>
                            <input type="text" id="firstname" class="form-control" name="firstname"/>
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example2">Middle name</label>
                            <input type="text" id="middlename" class="form-control" name="middlename"/>
                            @error('middlename')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example2">Last name</label>
                            <input type="text" id="lastname" class="form-control" name="lastname"/>
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Birthdate</label>
                            <input type="date" id="form3Example3" class="form-control" name="birthdate"/>
                            @error('birthdate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <p class="mb-0 font-title fw-bold" for="form3Example3">Address:</p>
                    <div class="col-lg-4 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Purok / Street</label>
                            <input type="text" id="form3Example3" class="form-control" name="purok"/>
                            @error('purok')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Barangay</label>
                            <input type="text" id="form3Example3" class="form-control" name="barangay"/>
                            @error('barangay')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">City / Town</label>
                            <input type="text" id="form3Example3" class="form-control" name="city"/>
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Father's name</label>
                            <input type="text" id="form3Example3" class="form-control" name="father"/>
                            @error('father')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example3">Mother's name</label>
                            <input type="text" id="form3Example3" class="form-control" name="mother"/>
                            @error('mother')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <a href="{{ route('home') }}" class="me-3 font-title fw-bold text-uppercase btn btn-warning btn-block my-3">
                            <i class="bi bi-arrow-bar-left"></i><span class="ms-2">back</span>
                        </a>


                        <button type="submit" class="font-title fw-bold text-uppercase btn btn-primary btn-block my-3">
                            <i class="bi bi-person-plus"></i><span class="ms-2">Register</span>
                        </button>
                    </div>
            </form>
        </div>
    </div>





</body>
</html>
