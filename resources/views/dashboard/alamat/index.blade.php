@extends('dashboard.layouts.main')

@section('container')
<a href="{{ route('alamat.create') }}">Tambah Alamat</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alamats as $alamat)
            <tr>
                <td>{{ $alamat->nama }}</td>
                <td>{{ $alamat->alamat }}</td>
                <td>
                    <a href="{{ route('alamat.edit', $alamat->id) }}">Edit</a>
                    <form action="{{ route('alamat.destroy', $alamat->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
