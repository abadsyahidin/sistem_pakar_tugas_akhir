@extends('layouts.main')
@section('title','penyakit kucing')
@section('content')
<div class="fugu-hero-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-7">

<div class="row justify-content-center">
    <div class="col-md-4">

      @if (session()->has('berhasil'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/masuk" method="post">
              @csrf
              <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">

              <div class="form-floating" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="name@example.com" autofocus required value="{{ old('email') }}">

                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating"  class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                placeholder="Password" required>

              </div>
              <div class="mb-4">
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3"> Belum Registrasi? <a href="/register">
                Registrasi sekarang!!</a></small>
        </main>
    </div>
</div>

        </div>
      </div>
    </div>
</div>



@endsection
