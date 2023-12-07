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


    <title>Add Product</title>
</head>

<body class="vh-100 container-fluid bg-dark m-0 p-0">
    <div class="bg-light m-0 p-0 py-2 border-bottom border-3 border-warning">
        <div class="container px-3">
            <div class="d-flex justify-content-between align-items-center flex-row">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <h2 class="fw-bold text-uppercase text-center text-dark m-0 text-uppercase"> Inventory System  </h2>
                </a>

                <div>
                    <a href="{{ route('index') }}" class="btn btn-primary font-title fw-bold">HOME</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger font-title fw-bold">LOGOUT</a>
                </div>
            </div>
        </div>
    </div>

    <main class="container mt-4">
        <div class="d-block my-3 border border-dark">
            <div class="row">
                <div class="col-sm-auto col-lg-1"></div>

                <div class="col-sm-12 col-lg-10">
                    <div class="row m-0 p-0">
                        <div class="col-sm-auto col-md-3"></div>
                        <div class="col-sm-12 col-md-6">
                                <div class="card py-3 px-4 bg-white border border-warning shadow-lg overflow-hidden">

                                    <h3 class="fw-bold text-center bg-warning rounded py-2 my-3 shadow">ADD NEW PRODUCT</h3>

                                    <div class="">
                                        <form action="{{ route('newProduct') }}" method="post">
                                            @csrf
                                            @if(Session::get('success'))
                                                <div class="mx-2 py-2 alert alert-success">{{ session::get('success') }}</div>
                                            @endif

                                            @if(Session::get('fail'))
                                                <div class="mx-2 py-2 alert alert-danger">{{ session::get('fail') }}</div>
                                            @endif

                                            <div class="mt-3">
                                                <label for=""> <span class="fw-bold">PRODUCT NAME<span class="text-danger">* </label>
                                                <input type="text" class="form-control border border-primary" placeholder="Product name" id="name" name="name"
                                                    value="{{ old('name') }}">
                                                    @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                            </div>

                                            <div class="mt-2">
                                                <div class="">
                                                    <label for="" class="text-uppercase fw-bold">Price<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border border-primary" id="price" name="price" placeholder="Price"
                                                        value="{{ old('price') }}">
                                                        @error('price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="">
                                                    <label for="" class="text-uppercase fw-bold">Quantity<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control border border-primary" id="quantity" name="quantity" placeholder="Quantity"
                                                        value="{{ old('quantity') }}">
                                                        @error('quantity')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>


                                            <div class="mt-2">
                                                <label for="" class="text-uppercase fw-bold">Description<span class="text-danger">*</span></label>
                                                <textarea type="text" class="form-control border border-primary" id="description" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                                    @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                            </div>


                                            <div class="mt-4 mb-3">
                                                <button type="submit" class="btn btn-primary w-100 fw-bold">
                                                    <h5 class="m-0 p-0 text-uppercase">SAVE product</h5>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        </div>
                        <div class="col-sm-auto col-md-3"></div>
                    </div>
                </div>

                <div class="col-sm-auto col-lg-1"></div>
            </div>
        </div>
    </main>
</body>

</html>
