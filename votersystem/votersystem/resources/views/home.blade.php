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
    <title>Voter System</title>
</head>
<body class="vh-100" style="background-color: hsl(0, 0%, 96%)">
    <nav class="navbar navbar-light bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand text-white font-title fw-bold fs-3">VOTER SYSTEM</a>
        <a href="{{ route('logout') }}" class="btn btn-warning font-title fw-bold"><i class="bi bi-box-arrow-left"></i><span class="ms-2">LOGOUT</span></a>
    </div>
    </nav>

    <div class="container mt-5">
        <a href="{{ route('addvoter') }}" class="font-title btn btn-outline-primary fw-bold mb-3"><i class="bi bi-plus-circle"></i><span class="ms-2">ADD VOTER</span></a>
        <table class="table align-middle bg-white border border-secondary shadow">
            <thead class="bg-light">
                <tr class="fw-bold font-title text-uppercase">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Address</th>
                    <th scope="col">Father</th>
                    <th scope="col">Mother</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voters as $v)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td scope="col"> {{  $v->firstname.' '.$v->middlename.' '.$v->lastname }} </td>
                        <td>{{ $v->birthdate }}</td>
                        <td>{{ $v->purok.', '.$v->barangay.', '.$v->city }}</td>
                        <td>{{ $v->father }}</td>
                        <td>{{ $v->mother }}</td>
                </tr>
                @endforeach

            </tbody>
            </table>



    </div>





</body>
</html>
