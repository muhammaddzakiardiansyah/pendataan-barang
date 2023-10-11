@extends('layouts/header')

@section('container')
    <div class="d-flex align-items-center w-100 h-100">
        <main class="form-signin w-100 m-auto">
            <h2 class="text-center fw-bold">Code<span class="text-success">pelita</span></h2>
            <form>
                <h1 class="h3 mb-3 fw-normal text-center mb-4 fs-2">Login</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
        </main>
    </div>
@endsection
