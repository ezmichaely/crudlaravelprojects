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


    <title>Add Voters</title>
</head>

<body class="vh-100 container-fluid bg-dark m-0 p-0">
    <div class="bg-light m-0 p-0 py-2 border-bottom border-3 border-warning">
        <div class="container px-3">
            <div class="d-flex justify-content-between align-items-center flex-row">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <h2 class="fw-bold text-uppercase text-center text-dark m-0"> VOTER'S REGISTRATION </h2>
                </a>

                <a href="{{ route('logout') }}" class="btn btn-danger font-title fw-bold">LOGOUT</a>
            </div>
        </div>
    </div>

    <main class="container mt-4">
        <div class="d-block my-3 border border-dark">
            <div class="row">
                <div class="col-sm-auto col-lg-1"></div>

                <div class="col-sm-12 col-lg-10">
                    <div class="row m-0 p-0">
                        <div class="col-sm-auto col-md-1"></div>
                        <div class="col-sm-12 col-md-10">
                                <div class="card py-3 px-4 bg-white border border-warning shadow-lg overflow-hidden">

                                    <h3 class="fw-bold text-center bg-warning rounded py-2 my-3 shadow">REGISTER A VOTER</h3>

                                    <div class="">
                                        <form action="{{ route('newVoter') }}" method="post">
                                            @csrf
                                            @if(Session::get('success'))
                                                <div class="mx-2 py-2 alert alert-success">{{ session::get('success') }}</div>
                                            @endif

                                            @if(Session::get('fail'))
                                                <div class="mx-2 py-2 alert alert-danger">{{ session::get('fail') }}</div>
                                            @endif

                                            <div class="mt-3">
                                                <label for=""> <span class="fw-bold">FULLNAME<span class="text-danger">*</span></span> <span class="fst-italic">(Firstname, Middlename, Lastname) </span> </label>
                                                <div class="row gx-1 gy-1 m-0">
                                                    <div class="col-sm-4">
                                                        <div class="d-flex flex-column">
                                                        <input type="text" class="form-control border border-primary" placeholder="First name" id="firstname" name="firstname"
                                                        value="{{ old('firstname') }}">
                                                        @error('firstname')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="d-flex flex-column">
                                                        <input type="text" class="form-control border border-primary" placeholder="Middle name" id="middlename" name="middlename"
                                                            value="{{ old('middlename') }}">
                                                            @error('middlename')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
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
                                                <div class="">
                                                    <label for="" class="text-uppercase fw-bold">Birthdate<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control border border-primary" id="bdate" name="bdate"
                                                        value="{{ old('bdate') }}">
                                                        @error('bdate')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <label for=""> <span class="fw-bold">ADDRESS<span class="text-danger">*</span></span> <span class="fst-italic">(Purok/Street, Barangay, City/Town) </span> </label>
                                                <div class="row gx-1 gy-1 m-0">
                                                    <div class="col-sm-4">
                                                        <div class="d-flex flex-column">
                                                        <input type="text" class="form-control border border-primary" placeholder="Purok / Street" id="purok" name="purok"
                                                        value="{{ old('purok') }}">
                                                        @error('purok')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="d-flex flex-column">
                                                        <input type="text" class="form-control border border-primary" placeholder="Barangay" id="barangay" name="barangay"
                                                            value="{{ old('barangay') }}">
                                                             @error('barangay')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="d-flex flex-column">
                                                        <input type="text" class="form-control border border-primary" placeholder="City / Town" id="city" name="city"
                                                        value="{{ old('city') }}">
                                                        @error('city')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mt-2">

                                                    <label for="" class="text-uppercase fw-bold">Father's Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border border-primary" placeholder="Father's Name" id="father" name="father"
                                                        value="{{ old('father') }}">
                                                        @error('father')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                            </div>

                                            <div class="mt-2">

                                                    <label for="" class="text-uppercase fw-bold">Mother's Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border border-primary" placeholder="Mother's Name" id="mother" name="mother"
                                                        value="{{ old('mother') }}">
                                                        @error('mother')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                            </div>

                                            <div class="mt-4 mb-3">
                                                <button type="submit" class="btn btn-primary w-100 fw-bold">
                                                    <h5 class="m-0 p-0 text-uppercase">REGISTER voter</h5>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        </div>
                        <div class="col-sm-auto col-md-1"></div>
                    </div>
                </div>

                <div class="col-sm-auto col-lg-1"></div>
            </div>
        </div>
    </main>
</body>

</html>
