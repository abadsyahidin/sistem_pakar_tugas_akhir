@extends('layouts.app')
@section('title','penyakit kucing')
@section('content')
<div class="fugu-hero" style="background-image: url(/img/gambar.jpg)">
    <div class="fugu--breadcrumbs-center">
<div class="row justify-content-center">
<div class="col-md-4">

        <main class="form-registration">
            <form action="/register" method="POST">
                @csrf

              <h1 class="h3 mb-3 fw-normal text-center">Form Daftar Akun</h1>

              <div class="form-floating" class="form-label">Name</label>
                <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror"
                id="name" placeholder="Name" required value="{{ old('name') }}">

                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating"  class="form-label">Username</label>
                <input type="text" name="username" class="form-control rounded-top @error('username')is-invalid @enderror"
                id="username" placeholder="Username" required value="{{ old('username') }}">

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email"
                placeholder="name@example.com" required value="{{ old('email') }}">

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating" class="form-label">Password</label>
                <input type="password" name="password" class="form-control rounded-bottom @error ('password')is-invalid @enderror"
                id="password" placeholder="Password" required>

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-2"> Sudah punya akun? <a href="/masuk">Masuk</a></small>
        </main>
    </div>
</div>
        </div>
      </div>




@endsection
