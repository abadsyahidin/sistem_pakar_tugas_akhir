@extends('dashboard.layouts.main')

@section('container')
<form action="{{ route('alamat.update', $alamat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $alamat->nama }}" required>
    </div>

    <div>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required>{{ $alamat->alamat }}</textarea>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
