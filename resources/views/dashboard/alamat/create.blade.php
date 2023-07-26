@extends('dashboard.layouts.main')

@section('container')

<form action="{{ route('alamat.store') }}" method="POST">
    @csrf

    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
    </div>

    <div>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
