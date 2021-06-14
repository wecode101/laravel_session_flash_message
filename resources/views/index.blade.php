<!DOCTYPE html>

<head>

    <meta charset="utf-8">

    <title>Wecode101 flash message</title>

    <meta name="description" content="Wecode101 flash message Laravel 8">

    <meta name="author" content="Wecode101">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"                         crossorigin="anonymous">

</head>

<html>

<body>

<div class="container align-items-start">

    <h3 class="d-flex justify-content-center">Create User</h3>

    <!--the message appears here it checks if the session has message. If true then it is displayed-->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container-fluid d-flex justify-content-center mt-4" style="max-width: 30em">

        <form id="signin" class="form-horizontal validate-form" method="POST" action="{{ route('create.user') }}">                         {{ csrf_field() }}

            <div class="form-group">

                <label for="name" class="control-label">Name</label>

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"/>

            </div>

            <div class="form-group">

                <label for="email" class="control-label">Email</label>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"/>

            </div>

            <div class="form-group mb-2">

                <label for="password" class="control-label">Password</label>

                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}"/>

            </div>

            <div class="form-group mb-0">

                <button type="submit" class="btn btn-primary">submit</button>

            </div>

        </form>

    </div>

</div>

</body>

</html>
