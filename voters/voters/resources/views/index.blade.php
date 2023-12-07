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


    <title>Voter's Registeration</title>
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
        <div class="d-block my-5">

        <a href="{{ route('addVoter') }}" target="_blank" class="btn btn-primary fw-bold mb-3"><h5 class="m-0">ADD NEW VOTER</h5> </a>
        <table class="table table-light table-hover table-striped table-bordered border-dark">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Voter's Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Address</th>
                    <th scope="col">Father's Name</th>
                    <th scope="col">Mother's Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voters as $v)
                    <tr>
                        <td scope="row" class="text-center"> {{ $i++ }} </td>
                        <td scope="col"> {{  $v->lastname.', '.$v->firstname.' '.$v->middlename }} </td>
                        <td>{{ $v->bdate }}</td>
                        <td>{{ $v->purok.', '.$v->barangay.', '.$v->city }}</td>
                        <td>{{ $v->father }}</td>
                        <td>{{ $v->mother }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>




        </div>
    </main>

</body>

</html>
