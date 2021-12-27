<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Form </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="">
</head>

<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div style="margin-left:50px;">
        <h1>Form</h1>

        <form action="{{ url('/users/success') }}" method="post">
            @csrf

            <div class="mb-3">

                <label for="exampleInputtext" class="form-label">Name</label>
                <input type="text" name='name' class="form-control" id="exampleInputtext" aria-describedby="emailHelp"  value="{{ old('name') }}"    >
            </div>
            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email"  name='email'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   value="{{ old('email') }}"   >
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1"   value="{{ old('password') }}" >
            </div>
            <div class="mb-3">

                <label for="exampleInputtext" class="form-label">Address</label>
                <input type="text" name='address' class="form-control" id="exampleInputtext" aria-describedby="emailHelp"  value="{{ old('address') }}"   >
            </div>

            <div class="mb-3">

                <label for="exampleInputlinkedin" class="form-label">Linkedin Link</label>
                <input type="url" name='linkedin' class="form-control" id="exampleInputlinkedin" aria-describedby="emailHelp"    value="{{ old('linkedin') }}" >
            </div>
            <label for="exampleInputtext" class="form-label">Gender</label>

            <div class="form-check">

                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"      >
                <label class="form-check-label" for="flexRadioDefault1">
                    Female </label>
            </div>
            <div class="form-check mb-3 ">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"  value="{{ old('gender') }}"    >
                <label class="form-check-label" for="flexRadioDefault2">
                    Male </label>
            </div>





            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>


</html>